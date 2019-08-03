
<div class="form-group{{ $errors->has('first_name') ? ' has-error' : ''}}">
    {!! Form::label('first_name', 'First Name * ', ['class' => 'col-md-2 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('first_name', null, ['class' => 'form-control','required']) !!}
        {!! $errors->first('first_name', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group{{ $errors->has('last_name') ? ' has-error' : ''}}">
    {!! Form::label('last_name', 'Last  Name *', ['class' => 'col-md-2 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('last_name', null, ['class' => 'form-control', 'required']) !!}
        {!! $errors->first('last_name', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group{{ $errors->has('bussiness_name') ? ' has-error' : ''}}">
    {!! Form::label('bussiness_name', 'Bussiness Name ', ['class' => 'col-md-2 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('bussiness_name', null, ['class' => 'form-control']) !!}
        {!! $errors->first('bussiness_name', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group{{ $errors->has('unit') ? ' has-error' : ''}}">
    {!! Form::label('unit', 'Unit/Floor/Shop', ['class' => 'col-md-2 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('unit', null, ['class' => 'form-control']) !!}
        {!! $errors->first('unit', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group{{ $errors->has('street_number') ? ' has-error' : ''}}">
    {!! Form::label('street_number', 'Street Number ', ['class' => 'col-md-2 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('street_number', null, ['class' => 'form-control']) !!}
        {!! $errors->first('street_number', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group{{ $errors->has('street_name') ? ' has-error' : ''}}">
    {!! Form::label('street_name', 'Street Name *', ['class' => 'col-md-2 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('street_name', null, ['class' => 'form-control','required']) !!}
        {!! $errors->first('street_name', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group{{ $errors->has('lot') ? ' has-error' : ''}}">
    {!! Form::label('lot', 'LOT', ['class' => 'col-md-2 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('lot', null, ['class' => 'form-control']) !!}
        {!! $errors->first('lot', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group{{ $errors->has('post_code') ? ' has-error' : ''}}">
    {!! Form::label('post_code', 'Post Code *', ['class' => 'col-md-2 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('post_code', null, ['class' => 'form-control','required']) !!}
        {!! $errors->first('post_code', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group{{ $errors->has('state') ? ' has-error' : ''}}">
    {!! Form::label('state', 'State ', ['class' => 'col-md-2 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('state', $state,null,['class' => 'form-control','required']) !!}
        {!! $errors->first('state', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group{{ $errors->has('suburb') ? ' has-error' : ''}}">
    {!! Form::label('suburb', 'Suburb', ['class' => 'col-md-2 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('suburb', null, ['class' => 'form-control']) !!}
        {!! $errors->first('suburb', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group{{ $errors->has('phone_home') ? ' has-error' : ''}}">
    {!! Form::label('phone_home', 'Phone Number Home', ['class' => 'col-md-2 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('phone_home', null, ['class' => 'form-control']) !!}
        {!! $errors->first('phone_home', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group{{ $errors->has('phone_mobile') ? ' has-error' : ''}}">
    {!! Form::label('phone_mobile', 'Phone Number Mobile *', ['class' => 'col-md-2 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('phone_mobile', null, ['class' => 'form-control','required']) !!}
        {!! $errors->first('phone_mobile', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group{{ $errors->has('email') ? ' has-error' : ''}}">
    {!! Form::label('email', 'Email *', ['class' => 'col-md-2 control-label']) !!}
    <div class="col-md-6">
        {!! Form::email('email', null, ['class' => 'form-control','required']) !!}
        {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group{{ $errors->has('type') ? ' has-error' : ''}}">
    {!! Form::label('type', 'Type', ['class' => 'col-md-2 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('type', \config('setting.party_type') ,(isset($party->type) && $party->type != '' ) ? $party->type : '' ,['class' => 'form-control']) !!}
        {!! $errors->first('type', '<p class="help-block">:message</p>') !!}
    </div>
</div>


<div class="form-group{{ $errors->has('property_type') ? ' has-error' : ''}}">
    {!! Form::label('property_type', 'Property Type ', ['class' => 'col-md-2 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('property_type', \config('setting.property_type'),(isset($party->property_type) && $party->property_type != '' ) ? $party->property_type : '', ['class' => 'form-control']) !!}
        {!! $errors->first('property_type', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group{{ $errors->has('single_multi') ? ' has-error' : ''}}">
    {!! Form::label('single_multi', 'Single/Multi Story', ['class' => 'col-md-2 control-label']) !!}
    <div class="col-md-6">
        <label>{!! Form::radio('single_multi', 'single', ['class' => 'form-control']) !!} Single </label>
        <label>{!! Form::radio('single_multi', 'multi', ['class' => 'form-control']) !!} Multi</label>
        {!! $errors->first('single_multi', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group{{ $errors->has('number_of_premises') ? ' has-error' : ''}}">
    {!! Form::label('number_of_premises', 'Number of Premises ', ['class' => 'col-md-2 control-label']) !!}
    <div class="col-md-6">
        <label>{!! Form::radio('number_of_premises', 'single', ['class' => 'form-control']) !!} Single </label>
        <label>{!! Form::radio('number_of_premises', 'multiple', ['class' => 'form-control']) !!} Multiple</label>
        {!! $errors->first('number_of_premises', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group{{ $errors->has('number_of_units') ? ' has-error' : ''}}">
    {!! Form::label('number_of_units', 'Number of Units', ['class' => 'col-md-2 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('number_of_units', null, ['class' => 'form-control']) !!}
        {!! $errors->first('number_of_units', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group{{ $errors->has('nmi') ? ' has-error' : ''}}">
    {!! Form::label('nmi', 'NMI', ['class' => 'col-md-2 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('nmi', null, ['class' => 'form-control']) !!}
        {!! $errors->first('nmi', '<p class="help-block">:message</p>') !!}
    </div>
</div>
{{--
@php
$meter_phase = array();
if(isset($party) && $party->meter_phase && $party->meter_phase != '' ) {
    $meter_phase = json_decode($party->meter_phase);
}

@endphp
<div class="form-group{{ $errors->has('meter_phase') ? ' has-error' : ''}}">
     {!! Form::label('meter_phase', 'Meter Phase', ['class' => 'col-md-2 control-label']) !!}
     <div class="col-md-6">
       
        {!! Form::checkbox('meter_phase[]','Hotwater', in_array('Hotwater',$meter_phase ) ) !!} Hotwater 
        {!! Form::checkbox('meter_phase[]','Floor Heating', in_array('Floor Heating',$meter_phase ) ) !!} Floor Heating 
    </div>
</div>
--}}

<div class="form-group{{ $errors->has('number_of_phase') ? ' has-error' : ''}}">
    {!! Form::label('number_of_phase', 'Number of Phase', ['class' => 'col-md-2 control-label']) !!}
    <div class="col-md-6">
        <label>{!! Form::radio('number_of_phase', '1', null ) !!} 1 </label>
        <label>{!! Form::radio('number_of_phase', '2', null ) !!} 2 </label>
        <label>{!! Form::radio('number_of_phase', '3', null) !!} 3 </label>
   </div>
</div>

<div class="form-group{{ $errors->has('meter_number') ? ' has-error' : ''}}">
    {!! Form::label('meter_number', 'Meter Number', ['class' => 'col-md-2 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('meter_number', null, ['class' => 'form-control']) !!}
        {!! $errors->first('meter_number', '<p class="help-block">:message</p>') !!}
    </div>
</div>
{{-- <div class="form-group{{ $errors->has('electrical_retailer') ? ' has-error' : ''}}">
    {!! Form::label('electrical_retailer', 'Electrical Retailer', ['class' => 'col-md-2 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('electrical_retailer', null, ['class' => 'form-control']) !!}
        {!! $errors->first('electrical_retailer', '<p class="help-block">:message</p>') !!}
    </div>
</div> --}}

<div class="form-group{{ $errors->has('electrical_distributer') ? ' has-error' : ''}}">
    {!! Form::label('electrical_distributer', 'Electrical Distributor ', ['class' => 'col-md-2 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('electrical_distributer', \config('setting.electrical_distributer'),(isset($party->electrical_distributer) && $party->electrical_distributer != '' ) ? $party->electrical_distributer : '', ['class' => 'form-control']) !!}
        {!! $errors->first('electrical_distributer', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group{{ $errors->has('inverter_service') ? ' has-error' : ''}}">
    {!! Form::label('inverter_service', 'Installation Type ', ['class' => 'col-md-2 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('inverter_service', \config('setting.inverter_service') , (isset($party->inverter_service) && $party->inverter_service != '' ) ? $party->inverter_service : '',['class' => 'form-control']) !!}
        {!! $errors->first('inverter_service', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group{{ $errors->has('electricity_supply') ? ' has-error' : ''}}">
    {!! Form::label('electricity_supply', 'Electricity Supply ', ['class' => 'col-md-2 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('electricity_supply',\config('setting.electricity_supply') ,(isset($party->electricity_supply) && $party->electricity_supply != '' ) ? $party->electricity_supply : '' ,['class' => 'form-control']) !!}
        {!! $errors->first('electricity_supply', '<p class="help-block">:message</p>') !!}
    </div>
</div>
{{-- <div class="form-group{{ $errors->has('seperate_inverter') ? ' has-error' : ''}}">
    {!! Form::label('seperate_inverter', 'Seperate Inverter ', ['class' => 'col-md-2 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('seperate_inverter', ['Yes'=>'Yes','No'=>'No','No Storage System'=>'No Storage System'] ,(isset($party->seperate_inverter) && $party->seperate_inverter != '' ) ? $party->seperate_inverter : '' ,['class' => 'form-control']) !!}
        {!! $errors->first('seperate_inverter', '<p class="help-block">:message</p>') !!}
    </div>
</div> --}}
@if(Auth::user()->can('change.customers.status'))
<div class="form-group{{ $errors->has('customer_status') ? ' has-error' : ''}}">
    {!! Form::label('customer_status', 'Change Status ', ['class' => 'col-md-2 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('customer_status', \config('setting.customer_status') ,( isset($party->customer_status) && $party->customer_status != '' ) ? $party->customer_status : '' ,['class' => 'form-control','required']) !!}
        {!! $errors->first('customer_status', '<p class="help-block">:message</p>') !!}
    </div>
</div>
@endif

<div class="form-group{{ $errors->has('provider_id') ? ' has-error' : ''}}">
    {!! Form::label('provider', 'Select Provider', ['class' => 'col-md-2 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('provider_id', $providers ,(isset($party->provider_id) && $party->provider_id != '' ) ? $party->provider_id : '' ,['class' => 'form-control','required']) !!}
        {!! $errors->first('provider_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group{{ $errors->has('ABN_number') ? ' has-error' : ''}}">
    {!! Form::label('ABN_number', 'ABN Number', ['class' => 'col-md-2 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('ABN_number', null, ['class' => 'form-control']) !!}
        {!! $errors->first('ABN_number', '<p class="help-block">:message</p>') !!}
    </div>
</div>

@if(isset($party) && $party->status != 0 )
@php $data = json_decode($party->party_data); @endphp
<div class="form-group{{ $errors->has('ABN_number') ? ' has-error' : ''}}">
    {!! Form::label('comments', 'Comments', ['class' => 'col-md-2 control-label']) !!}
    <div class="col-md-6">
    @if($data)
        @foreach($data as $key => $value)
            @if(!is_object($value))
                <b> {{ $key }} </b> : {{ $value }} ,
            @endif
        @endforeach 
    @endif
    </div>
</div>
@endif
<div class="form-group">
    <div class="col-md-offset-2 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>

