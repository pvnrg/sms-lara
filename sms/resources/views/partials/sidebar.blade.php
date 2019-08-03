 <ul class="sidebar-menu" data-widget="tree">
    <li class="header">MAIN NAVIGATION</li>
        <?php
        $active = function ($menu) {
            $active = 0;
            if(str_contains(Request::url(), $menu->url ) && ($menu->url!='' && $menu->url != "/admin" || (Route::getCurrentRoute()->uri() =="admin"))){
                $active = 1;
            }
            if(!$active && isset($menu->items)){
                foreach($menu->items as $me){
                    if(str_contains(Request::url(), $me->url) && ($me->url!='' && $me->url != "/admin" || (Route::getCurrentRoute()->uri() =="admin"))){
                        $active = 1;
                        break;
                    }
                }
            }
            return $active;
        };

        $accessible = function ($menu) {
            $isaccessible = 0;
            // if($menu->allow_site == "master" && !_MASTER){
            //     $isaccessible = 0;
            // }else{
            //     $isaccessible = 1;
            // }
            if(isset($menu->permission) && Auth::user()->can($menu->permission)){
                $isaccessible = 1;
            }else{
                $isaccessible = 0;
            }
            //  $isaccessible = 1;
            return $isaccessible;
        };

        ?>

        @foreach($laravelAdminMenus->menus as $section)                
            @if($accessible($section))
                <li class="treeview {{ ($active($section))? "menu-open": "" }}">
                    <a href="{{ ($section->url) ? url($section->url) : "#"  }}">
                        <i class="fa fa-share"></i> <span>{{$section->title}}</span>
                        <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    @if(isset($section->items) && count($section->items)>0)
                    <ul class="treeview-menu" style="display: {{ ($active($section))? "block": 'none' }}">
                        @foreach($section->items as $menu)
                            @if($accessible($menu))
                                <li><a href="{{ ($menu->url) ? url($menu->url) : "#"  }}"><i class="{{ $menu->icon }}"></i> {{$menu->title}}</a></li>
                            @endif
                        @endforeach
                    </ul>
                    @endif
                </li>
            @endif
        @endforeach
</ul>

        