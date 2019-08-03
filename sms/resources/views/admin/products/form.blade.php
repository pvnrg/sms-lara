{{-- @if(Route::currentRouteName() == 'products.edit' )
<div class="form-group{{ $errors->has('type') ? ' has-error' : ''}}">
    {!! Form::label('type', 'Type *', ['class' => 'col-md-2 control-label']) !!} 
    
    <div class="col-md-6">
        {!! Form::select('type',[null => 'Please Select'] + \config('setting.type') , (isset($product->type) && $product->type != '' ) ? $product->type : '' ,['class' => 'form-control', 'id'=>'product_type' , 'disabled'=>'disabled', 'required']) !!}
        
        {!! $errors->first('type', '<p class="help-block">:message</p>') !!}
    </div>
</div>
@else
<div class="form-group{{ $errors->has('type') ? ' has-error' : ''}}">
    {!! Form::label('type', 'Type *', ['class' => 'col-md-2 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('type', [null => 'Please Select'] + \config('setting.type') ,null, ['class' => 'form-control','required'=>'required','id'=>'product_type' ]) !!}
        {!! $errors->first('type', '<p class="help-block">:message</p>') !!}
    </div>
</div>

@endif --}}
{{-- @if(Route::currentRouteName() == 'products.edit' )
<div class="form-group{{ $errors->has('category_id') ? ' has-error' : ''}}">
    {!! Form::label('category_id', 'Category *', ['class' => 'col-md-2 control-label']) !!} 
    
    <div class="col-md-6">
        {!! Form::select('category_id',$category,null ,['class' => 'form-control', 'id'=>'product_type' , 'disabled'=>'disabled', 'required', '']) !!}
        
        {!! $errors->first('category_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>
@else --}}
<div class="form-group{{ $errors->has('category_id') ? ' has-error' : ''}}">
    {!! Form::label('category_id', 'Category *', ['class' => 'col-md-2 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('category_id', $category,null, ['class' => 'form-control','required'=>'required','id'=>'product_type' ]) !!}
        {!! $errors->first('category_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

{{-- @endif --}}

{{-- <div class="form-group{{ $errors->has('brand') ? ' has-error' : ''}}">
    {!! Form::label('brand', 'Brand', ['class' => 'col-md-2 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('brand', null, ['class' => 'form-control']) !!}
        {!! $errors->first('brand', '<p class="help-block">:message</p>') !!}
    </div>
</div> --}}

<div class="form-group{{ $errors->has('brand_id') ? ' has-error' : ''}}">
    {!! Form::label('brand_id', 'Brand *', ['class' => 'col-md-2 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('brand_id', $brand,null, ['class' => 'form-control','required'=>'required' ]) !!}
        {!! $errors->first('brand_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group{{ $errors->has('model') ? ' has-error' : ''}}">
    {!! Form::label('model', 'Model *', ['class' => 'col-md-2 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('model', null, ['class' => 'form-control','required']) !!}
        {!! $errors->first('model', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group{{ $errors->has('series') ? ' has-error' : ''}}">
    {!! Form::label('series', 'Series', ['class' => 'col-md-2 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('series', null, ['class' => 'form-control']) !!}
        {!! $errors->first('series', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group{{ $errors->has('rated_power_output') ? ' has-error' : ''}}">
    {!! Form::label('rated_power_output', 'Rated Power Output (in Watt) *', ['class' => 'col-md-2 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('rated_power_output', null, ['class' => 'form-control','required']) !!}
        {!! $errors->first('rated_power_output', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group{{ $errors->has('certifying_authority_certificate_number') ? ' has-error' : ''}}">
    {!! Form::label('certifying_authority_certificate_number', 'Certifying Authority Certificate Number *', ['class' => 'col-md-2 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('certifying_authority_certificate_number', null, ['class' => 'form-control','required']) !!}
        {!! $errors->first('certifying_authority_certificate_number', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group{{ $errors->has('capacity') ? ' has-error' : ''}}">
    {!! Form::label('capacity', 'Capacity', ['class' => 'col-md-2 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('capacity', \config('setting.capacity') , (isset($product->capacity) && $product->capacity != '' ) ? $product->capacity : '' , ['class' => 'form-control']) !!}
        {!! $errors->first('capacity', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group{{ $errors->has('name') ? ' has-error' : ''}}">
    {!! Form::label('name', 'Name *', ['class' => 'col-md-2 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('name', null, ['class' => 'form-control','required'=> 'required']) !!}
        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('shortdesc') ? 'has-error' : ''}}">
    {!! Form::label('shortdesc', 'Short Description *', ['class' => 'col-md-2 control-label']) !!}
     <div class="col-md-6">
    {!! Form::textarea('shortdesc', null, ['class' => 'form-control','size' => '30x5','required'=>
    'required']) !!}
    {!! $errors->first('shortdesc', '<p class="help-block with-errors">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
    {!! Form::label('description', 'Description', ['class' => 'col-md-2 control-label']) !!}
     <div class="col-md-6">
    {!! Form::textarea('description', null, ['class' => 'form-control','size' => '30x5']) !!}
    {!! $errors->first('description', '<p class="help-block with-errors">:message</p>') !!}
    </div>
</div>

{{-- <div class="form-group{{ $errors->has('category_id') ? ' has-error' : ''}}">
    {!! Form::label('category_id', 'Category *', ['class' => 'col-md-2 control-label']) !!}
    <div class="col-md-6">
        
        {!! Form::select('category_id',$category, null, ['class' => 'form-control','required'=>'required']) !!}
		{!! $errors->first('category_id', '<p class="help-block with-errors">:message</p>') !!}
    </div>
</div> --}}
{{-- <div class="form-group{{ $errors->has('price') ? ' has-error' : ''}}">
    {!! Form::label('price', 'Price *', ['class' => 'col-md-2 control-label']) !!}
    <div class="col-md-6">
        
        {!! Form::text('price',null, ['class' => 'form-control','required'=>'required']) !!}
        {!! $errors->first('price', '<p class="help-block with-errors">:message</p>') !!}
    </div>
</div>
<div class="form-group{{ $errors->has('sale_price') ? ' has-error' : ''}}">
        {!! Form::label('sale_price', 'Sale Price *', ['class' => 'col-md-2 control-label']) !!}
        <div class="col-md-6">
            
            {!! Form::text('sale_price',null, ['class' => 'form-control','required'=>'required']) !!}
            {!! $errors->first('sale_price', '<p class="help-block with-errors">:message</p>') !!}
        </div>
    </div> --}}


    <div class="form-group {{ $errors->has('image') ? 'has-error' : ''}}">
        {!! Form::label('image',  'Feature Image ', ['class' => 'col-md-2 control-label']) !!}
        <div class="col-md-6">
            <input type="file" name="image" id="image" accept="image/*" >
            {!! $errors->first('image', '<p class="help-block with-errors">:message</p>') !!}
        </div>
        @if(isset($product) && $product->image)
            <img src="{!! asset('Products/'.$product->image) !!}" alt="" width="100px">
        @endif

    </div>    


    <div class="form-group {{ $errors->has('mimage') ? 'has-error' : ''}}">
        {!! Form::label('mimage',  'Other Images', ['class' => 'col-md-2 control-label']) !!}
        <div class="col-md-6">
            <input type="file" name="mimage[]" id="mimage" multiple >
            {!! $errors->first('mimage', '<p class="help-block with-errors">:message</p>') !!}
        </div>
    </div>
    @if(isset($images) && $images)
    
        @foreach($images as $img_name)
            <?php $class="imageClass_".$img_name->id ?>
            <div class={{$class}} >
                <img src="{!! asset('Products/'.$img_name->image) !!}" alt="image" width="100px">
                {!! Form::button('Delete', ['class' => 'btn btn-primary delete_image','img'=>$img_name->id]) !!}</br></br>
            </div>
        @endforeach
    @endif
    
{{-- @endif --}}

{{-- <div class="form-group{{ $errors->has('no_of_phases') ? ' has-error' : ''}}">
    {!! Form::label('no_of_phases', 'No of Phases', ['class' => 'col-md-2 control-label']) !!}
    <div class="col-md-6">
        <label>{!! Form::radio('no_of_phases','1') !!} 1</label>
        <label>{!! Form::radio('no_of_phases','2') !!} 2</label>
        <label>{!! Form::radio('no_of_phases','3') !!} 3</label>
        {!! $errors->first('no_of_phases', '<p class="help-block">:message</p>') !!}
    </div>
</div> --}}


{{-- Inverter --}}
<div id="inverterType" style="display:none;">
    <div class="form-group{{ $errors->has('ac_power_rating') ? ' has-error' : ''}}">
        {!! Form::label('ac_power_rating', 'AC Power Rating', ['class' => 'col-md-2 control-label']) !!}
        <div class="col-md-6">
            {!! Form::text('ac_power_rating', 0, ['class' => 'form-control']) !!}
            {!! $errors->first('ac_power_rating', '<p class="help-block">:message</p>') !!}
        </div>
    </div>

    <div class="form-group{{ $errors->has('solar_dc_rating') ? ' has-error' : ''}}">
        {!! Form::label('solar_dc_rating', 'Solar DC Rating', ['class' => 'col-md-2 control-label']) !!}
        <div class="col-md-6">
            {!! Form::text('solar_dc_rating', 0, ['class' => 'form-control']) !!}
            {!! $errors->first('solar_dc_rating', '<p class="help-block">:message</p>') !!}
        </div>
    </div>

    <div class="form-group{{ $errors->has('approved_inverter') ? ' has-error' : ''}}">
        {!! Form::label('approved_inverter', 'Approved Inverter', ['class' => 'col-md-2 control-label']) !!}
        <div class="col-md-6">
            <label>{!! Form::radio('approved_inverter','yes') !!} Yes</label>
            <label>{!! Form::radio('approved_inverter','no') !!} No</label>
            {!! $errors->first('approved_inverter', '<p class="help-block">:message</p>') !!}
        </div>
    </div>

    <div class="form-group{{ $errors->has('export_limit') ? ' has-error' : ''}}">
        {!! Form::label('export_limit', 'Export Limit', ['class' => 'col-md-2 control-label']) !!}
        <div class="col-md-6">
            {!! Form::text('export_limit', null, ['class' => 'form-control']) !!}
            {!! $errors->first('export_limit', '<p class="help-block">:message</p>') !!}
        </div>
    </div>

    <div class="form-group{{ $errors->has('sop3306_compliant') ? ' has-error' : ''}}">
        {!! Form::label('sop3306_compliant', 'SOP 33-06 Compliant', ['class' => 'col-md-2 control-label']) !!}
        <div class="col-md-6">
            <label>{!! Form::radio('sop3306_compliant','yes') !!} Yes</label>
            <label>{!! Form::radio('sop3306_compliant','no') !!} No</label>
            {!! $errors->first('sop3306_compliant', '<p class="help-block">:message</p>') !!}
        </div>
    </div>

    <div class="form-group{{ $errors->has('as4777_compliant') ? ' has-error' : ''}}">
        {!! Form::label('as4777_compliant', 'AS4777 Compliant ', ['class' => 'col-md-2 control-label']) !!}
        <div class="col-md-6">
            <label>{!! Form::radio('as4777_compliant','yes') !!} Yes</label>
            <label>{!! Form::radio('as4777_compliant','no') !!} No</label>
            {!! $errors->first('as4777_compliant', '<p class="help-block">:message</p>') !!}
        </div>
    </div>

    

{{--
    <div class="form-group{{ $errors->has('capacity_phase_a') ? ' has-error' : ''}}">
        {!! Form::label('capacity_phase_a', 'Capacity Phase A', ['class' => 'col-md-2 control-label']) !!}
        <div class="col-md-6">
            {!! Form::text('capacity_phase_a', null, ['class' => 'form-control']) !!}
            {!! $errors->first('capacity_phase_a', '<p class="help-block">:message</p>') !!}
        </div>
    </div>

    <div class="form-group{{ $errors->has('capacity_phase_b') ? ' has-error' : ''}}">
        {!! Form::label('capacity_phase_b', 'Capacity Phase B', ['class' => 'col-md-2 control-label']) !!}
        <div class="col-md-6">
            {!! Form::text('capacity_phase_b', null, ['class' => 'form-control']) !!}
            {!! $errors->first('capacity_phase_b', '<p class="help-block">:message</p>') !!}
        </div>
    </div>

    <div class="form-group{{ $errors->has('capacity_phase_c') ? ' has-error' : ''}}">
        {!! Form::label('capacity_phase_c', 'Capacity Phase C', ['class' => 'col-md-2 control-label']) !!}
        <div class="col-md-6">
            {!! Form::text('capacity_phase_c', null, ['class' => 'form-control']) !!}
            {!! $errors->first('capacity_phase_c', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
    
    
    --}}
</div>
{{-- /Inverter --}}

{{-- Battery --}}
<div id="batteryType" style="display:none;">
    <div class="form-group{{ $errors->has('battery_rated_storage_capacity') ? ' has-error' : ''}}">
        {!! Form::label('battery_rated_storage_capacity', 'Battery Rated Storage Capacity', ['class' => 'col-md-2 control-label']) !!}
        <div class="col-md-6">
            {!! Form::text('battery_rated_storage_capacity', 0, ['class' => 'form-control']) !!}
            {!! $errors->first('battery_rated_storage_capacity', '<p class="help-block">:message</p>') !!}
        </div>
    </div>

    <div class="form-group{{ $errors->has('battery_type') ? ' has-error' : ''}}">
        {!! Form::label('battery_type', 'Battery Type', ['class' => 'col-md-2 control-label']) !!}
        <div class="col-md-6">
            {!! Form::select('battery_type', \config('setting.battery_type') , (isset($product->battery_type) && $product->battery_type != '' ) ? $product->battery_type : '' , ['class' => 'form-control']) !!}
            {!! $errors->first('battery_type', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
</div>
{{-- /Battery --}}

<div class="form-group">
    <div class="col-md-offset-2 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>

@push('js')
<script>
    $('.delete_image').click(function(){
        var img_id = $(this).attr("img");
        $.ajax({
			type: "POST",
			url: '{{url("admin/products/deleteimage/")}}',
			data: {id:img_id },
			success: function( msg ) {
                $('.imageClass_'+img_id).hide();                       
			    }
			});
    });

    $( document ).ready(function() {
        var type = $('#product_type option:selected').text();
        
        if(type == undefined || type == 0 || type == null){
            $('#product_type').removeAttr("disabled")
            $('#product_type').required
        }
        switch(type){
            case "Solar Inverter":
                $("#inverterType").show()
                $("#batteryType").hide()
                break;
            case "Battery Inverter":
                $("#inverterType").show()
                $("#batteryType").hide()
                break;
            case "Battery":
                $("#batteryType").show()
                $("#inverterType").hide()
                break;
            default:
                $("#inverterType").hide()
                $("#batteryType").hide()
           }
    });

    $('#product_type').on('change',function(){
        var type = $('#product_type option:selected').text();
        
        switch(type){
        case "Solar Inverter":
            $("#inverterType").show()
            $("#batteryType").hide()
            break;
        case "Battery Inverter":
            $("#inverterType").show()
            $("#batteryType").hide()
            break;
        case "Battery":
            $("#batteryType").show()
            $("#inverterType").hide()
            break;
        default:
            $("#inverterType").hide()
            $("#batteryType").hide()
       }
   });
        
</script>
@endpush

