@if($model !="" && isset($page))
        @php( $tooltip = trans('tooltip.'.$model.'.index_info') )
        @php( $tooltip_header = trans('tooltip.'.$model.'.'.$page.'_info_header') )

        <div href="#" class="tooltip-icon" data-placement="left" data-toggle="popover" tabindex="0" data-trigger="focus" title="{{$tooltip_header}}" data-content="{{$tooltip}}"><i class='fa fa-info-circle'></i></div>


       {{--<div class='btn has-popover' data-trigger="focus" tabindex="0"  data-toggle="popover" data-content='{{$tooltip}}' data-placement='left' title='{{$tooltip_header}}'><i class='fa fa-info-circle'></i></div>--}}
                        {{--<div class="btn  input-tooltip has-tooltip" data-placement="bottom" title="" data-original-title="{{$tooltip}}"><i class='fa fa-info-circle'></i></div>--}}{{----}}{{----}}
@endif

