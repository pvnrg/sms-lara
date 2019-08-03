@extends('layouts.backend')
@section('title','Opportunity')
@section('pageTitle','Opportunity')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box bordered-box blue-border">
                <div class="box-header blue-background">
                    <div class="title">
                        <i class="icon-circle-blank"></i>
                        Opportunity
                    </div> 
                </div>
                <div class="box-content panel-body">
                    <div class="row">
                        <div class="col-md-6">
                            
                        </div>
                        {!! Form::open(['method' => 'GET', 'url' => '/admin/opportunity', 'class' => 'navbar-form navbar-right', 'role' => 'search'])  !!}
                        
                        <div class="input-search">
                            <input type="search" class="form-control search" name="search" placeholder="{{Request::get('search')}}" value="{!! request()->get('search') !!}">
                        </div>
                        {!! Form::close() !!}
                        <div class="col-md-3">

                        </div>
                    </div>
                </div>
                <div class="box-content panel-body">
                    <div class="row">
                    <div class="table-responsive">
                        <table class="table table-borderless datatable responsive">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Owner Name</th>
                                <th>Owner Id</th>
                                
                            </tr>
                            </thead>
                            <tbody>
                                @if(count($opportunity)>0)
                                    @foreach($opportunity as $item)
                                    <?php //echo '<pre>';print_r($user->userData);?>
                                    <tr>
                                        <td> {{$item->opp_id}}</td>
                                        <td> {{$item->opp_name}}</td>                                    
                                        <td> 
                                            @if(count($item->userData)>0)
                                                <a href="{{ url('/admin/users/' . $item->userData[0]->id) }}">{{$item->userData[0]->name}}</a>
                                            @else
                                                {{$item->capsuleUser->name}}
                                            @endif
                                        </td>       

                                        <td> {{$item->owner_id}}</td>                                    
                                    </tr>   
                                    @endforeach
                                @else
                                <tr>
                                    No opportunity available !!
                                </tr>
                                @endif
                            </tbody>

                        </table>
                    </div>

                    <div class="pagination-wrapper"> {!! $opportunity->appends(['search' => Request::get('search')])->render() !!} </div>
</div>
                </div>
            </div>
        </div>
    </div>
@endsection




