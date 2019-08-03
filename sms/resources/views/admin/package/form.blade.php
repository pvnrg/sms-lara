
<div class="form-group{{ $errors->has('title') ? ' has-error' : ''}}">
    {!! Form::label('title', 'Title *', ['class' => 'col-md-2 col-sm-12 col-xs-12  control-label']) !!}
    <div class="col-md-8">
        {!! Form::text('title', null, ['class' => 'form-control','required'=> 'required']) !!}
        {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
    </div>
</div>


{{-- Second time when add button clicks Product --}}
@if(isset($packageproduct))
@foreach($packageproduct as $product_detail)
<div class="form-group remove_product_item">
	{!! Form::label('product', 'Product *', ['class' => 'col-md-2 col-sm-12 col-xs-12  control-label']) !!}
	<div class="col-md-10 col-sm-12 col-sm-12 product_item"> 
		<table>
			<tr>
				<td id="Product_kw">
					<select name="products[]" class="products" >
						<option>Select</option>
					@foreach($products as $product)
						<option  <?php if(isset($product_detail)  && $product_detail->product_id == $product->id) echo "selected='selected'"; ?> value="{{$product->id}}" data-kw="{{$product->rated_power_output}}" data-type="{{$product->category->name}}" >{{$product->name}} ( {{$product->category->name}} )</option>
					@endforeach
					</select>
				</td>
				<td id="product_rated_power_output">
					<input type="hidden" name="rated_power_output[]" readonly class="rated_power_output"  value="{{$product_detail->kw}}"/>
                </td>
                <td id="product_type">
                        <input type="hidden" name="type[]" readonly class="type" value="{{ $product_detail->product->category->name }}"/></td>
				<td id="product_quantity">
					<label class="control-label">Quantity : </label>
					<input type="number" name="quantity[]" required  class="quantity" value="{{$product_detail->quantity}}" min="1" max="400"/>
				</td>
				<td id="product_value">
					<?php $val = $product_detail->kw * $product_detail->quantity; ?>   
					<input type="hidden" name="value[]" readonly class="value" value="{{$val}}"/>
                </td>
                <td><a href="#" class="remove_package btn">Remove</a></td>
			</tr>
		</table>
		 
	</div> 
	    
</div>
@endforeach
@endif


{{-- Main Product Div --}}
<div class="form-group{{ $errors->has('product') ? ' has-error' : ''}}">
	{!! Form::label('product', 'Product *', ['class' => 'col-md-2 col-sm-12 col-xs-12  control-label']) !!}
	<div class="col-md-10 col-sm-12 col-xs-12 product_item product_wrapper"> 
		<table>
			<tr>
				<td id="Product_kw">
					<select name="products[]" class="products"  >
						<option value="">Select</option>
					@foreach($products as $product)
						<option  data-kw="{{$product->rated_power_output}}" data-type="{{$product->category->name}}" value="{{$product->id}}">{{$product->name}} ( {{$product->category->name}} )</option>
					@endforeach
					</select>
				</td>
				<td id="product_rated_power_output">
				<input type="hidden" name="rated_power_output[]" readonly class="rated_power_output" /></td>
				<td id="product_type">
				<input type="hidden" name="type[]" readonly class="type"  /></td>
				<td id="product_quantity">
				<label class="control-label">Quantity : </label>
				<input type="number" name="quantity[]" required class="quantity" value="1" min="1" max="400"/></td>
				<td id="product_value">
				<input type="hidden" name="value[]" readonly class="value"/></td>
				<td id="add_btn"><input type="button" value="Add" id="add" class="btn btn-add"/></td>
			</tr>
		</table>
	</div>
</div>

<div class="main_product">
        
</div> 

<div class="form-group{{ $errors->has('price') ? ' has-error' : ''}}">
    {!! Form::label('price', 'Price *', ['class' => 'col-md-2 col-sm-12 col-xs-12  control-label ']) !!}
    <div class="col-md-8">        
        {!! Form::text('price',null, ['class' => 'form-control ','required']) !!}
        {!! $errors->first('price', '<p class="help-block with-errors">:message</p>') !!}
    </div>
</div>

<div class="form-group{{ $errors->has('kw') ? ' has-error' : ''}}">
    {!! Form::label('kw', 'Total Watt *', ['class' => 'col-md-2 col-sm-12 col-xs-12  control-label']) !!}
    <div class="col-md-8">
        {!! Form::text('kw',null, ['class' => 'form-control kw','readonly']) !!}
        {!! $errors->first('kw', '<p class="help-block with-errors">:message</p>') !!}
    </div>
</div>


{{-- <div class="form-group{{ $errors->has('display_kw') ? ' has-error' : ''}}">
    {!! Form::label('display_kw', 'Display Watt *', ['class' => 'col-md-2 col-sm-12 col-xs-12  control-label']) !!}
    <div class="col-md-8">
        {!! Form::number('display_kw',null, ['class' => 'form-control','required']) !!}
        {!! $errors->first('display_kw', '<p class="help-block with-errors">:message</p>') !!}
    </div>
</div> --}}

<div class="form-group{{ $errors->has('number_of_phase') ? ' has-error' : ''}}">
    {!! Form::label('number_of_phase', 'Number Of Phase', ['class' => 'col-md-2 col-sm-12 col-xs-12  control-label']) !!}
    <div class="col-md-8">
            <label>{!! Form::radio('number_of_phase', '1', ['class' => 'form-control']) !!} 1 </label>
            <label>{!! Form::radio('number_of_phase', '2', ['class' => 'form-control']) !!} 2 </label>
            <label>{!! Form::radio('number_of_phase', '3', ['class' => 'form-control']) !!} 3 </label>
        {!! $errors->first('number_of_phase', '<p class="help-block with-errors">:message</p>') !!}
    </div>
</div>

<div class="form-group{{ $errors->has('image') ? ' has-error' : ''}}">
    {!! Form::label('image', 'Chart JPG', ['class' => 'col-md-2 col-sm-12 col-xs-12  control-label']) !!}
    Please upload this resolution image for better display in Report [ 230px X 110px ]
    <div class="col-md-8">
        {!! Form::file('image',null, ['class' => '']) !!} 
    </div>
    <div class="col-md-2">
        @if(isset($package) && isset($package->image))
        
            <img  src="{{url('/package/'.$package->id.'/'.$package->image)}}" width="125" height="100" />
            <a href="{{url('/package/'.$package->id.'/'.$package->image)}}" target="_blank" class="btn">View</a>
        
        @endif 
        {!! $errors->first('image', '<p class="help-block with-errors">:message</p>') !!}
    </div>
</div>

<div class="form-group{{ $errors->has('package_image') ? ' has-error' : ''}}">
    {!! Form::label('package_image', 'Single Line Diagram', ['class' => 'col-md-2 col-sm-12 col-xs-12  control-label']) !!}
    <div class="col-md-8">
        {!! Form::file('package_image',null, ['class' => '']) !!} 
    </div>
    <div class="col-md-2">
        @if(isset($package) && isset($package->package_image))
        
            {{-- <img  src="{{url('/package/'.$package->id.'/'.$package->package_image)}}" width="125" height="100" alt = "" /> --}}
            <a href="{{url('/package/'.$package->id.'/'.$package->package_image)}}" target="_blank" >{{ $package->package_image }}</a>
        
        @endif 
        {!! $errors->first('package_image', '<p class="help-block with-errors">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-2 col-md-6">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>

@push('js')
<script type="text/javascript">
    $(document).ready(function() {
        
        var selectedProducts = $(".products option:selected").val();
        if(selectedProducts == null || selectedProducts==''){
            $("select.products").attr('required',true); 
        }
                
        
    });


    var total = 0;
    var total_kw = 0;

    $("#add").click(function() {
        var wrapper = $(".product_wrapper").html();
        $('.main_product').append('<div class="form-group wrapper_class"><label class="col-md-2"></label><div class="col-md-9"><div class="col-md-10 nopadding">'+wrapper+'</div><div class="col-md-2 nopadding"><span><a href="#" class="remove_field btn "> Remove</a></span></div></div></label>' ) ;
       var add  = $( '.wrapper_class table tr td:last-child').addClass('remove_add_btn');
       $('.remove_add_btn').hide();
        
    });

    $('body').delegate('.products', 'change', function () {
        
        var product = $(this).val();

        var kw = $('option:selected', this).attr('data-kw');

        var type = $('option:selected', this).attr('data-type');
        $(this).closest('td').siblings('#product_type').find('.type').val(type);
        if(type != "Solar Panel"){
            var kw = 0;
        }

        $(this).closest('td').siblings('#product_rated_power_output').find('.rated_power_output').val(kw);

        var quantity =  $(this).closest('td').siblings('#product_quantity').find('.quantity').val();
        var value = kw * quantity ;

        $(this).closest('td').siblings('#product_value').find('.value').val(value);

        
        $('.quantity').trigger('focusout');
        
    });

    $('body').delegate('.quantity', 'focusout', function () {
        
        total = 0;
        total_kw = 0;
        $('.quantity').each(function(i, obj) {
            
                var kw =  $(this).closest('td').siblings('#product_rated_power_output').find('.rated_power_output').val();
                
                var type =  $(this).closest('td').siblings('#product_type').find('.type').val();
             
                var quantity =  $(this).val();
             
                // if(type != "Solar Panel"){
                //     var kw = 0;
                // }
                
                var value = kw * quantity ;
          
                $(this).closest('td').siblings('#product_value').find('.value').val(value);
                
                total = ( total + value );
                $('.kw').val(total);
        });

    });

    $('body').delegate('.remove_field', 'click', function (e) {
        
        e.preventDefault();
        
        $(this).parents('div').closest('.wrapper_class').remove();

        $('.quantity').trigger('focusout');

        var selectedProducts = $(".products option:selected").val();
        if(selectedProducts == null || selectedProducts==''){
            $("select.products").attr('required',true); 
        }

    });

    $('body').delegate('.remove_package', 'click', function (e) {
        
        e.preventDefault();
      
        $(this).parents('div').closest('.remove_product_item').remove();

        $('.quantity').trigger('focusout');

        var selectedProducts = $(".products option:selected").val();
        if(selectedProducts == null || selectedProducts==''){
            $("select.products").attr('required',true); 
        }

    });
    
    var sum = 0 ; 
    $('.value').each(function() {
        var currentValue = $(this).val();
        sum = sum + +currentValue ;
        
    });
    $('.kw').val(sum);


   
    


    
</script>
@endpush

