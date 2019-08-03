@extends('layouts.backend')

@section('title','View Product')


@section('content')
    <div class="row">

        <div class="col-md-12">
            <div class="box bordered-box blue-border">
                <div class="box-header blue-background">
                                                  <div class="title">
                                                      <i class="icon-circle-blank"></i>
                                                      Product
                                                  </div>

                               </div>
                <div class="box-content ">

                    <a href="{{ URL::previous() }}" title="Back">
                        <button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back
                        </button>
                    </a>
                    @if(Auth::user()->can('access.product.edit'))
                    <a href="{{ url('/admin/products/' . $product->id . '/edit') }}" title="Edit Product">
                        <button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                            Edit Product
                        </button>
                    </a>
                    @endif
                    @if(Auth::user()->can('access.product.delete'))
                    {!! Form::open([
                        'method' => 'DELETE',
                        'url' => ['/admin/products', $product->id],
                        'style' => 'display:inline'
                    ]) !!}
                    {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                            'type' => 'submit',
                            'class' => 'btn btn-danger btn-xs',
                            'title' => 'Delete Product',
                            'onclick'=>'return confirm("Confirm delete?")'
                    ))!!}
                    {!! Form::close() !!}
                    @endif
                    <br/>
                    <br/>


                    <div class="table-responsive">
                        <table class="table table-borderless">
                            <tbody>

                            <tr>
                                <td>Id</td>
                                <td>{{ $product->id }}</td>
                            </tr>


                            <tr>
                                <td>Name</td>
                                <td>{{ $product->name }}</td>
                            </tr>
                       
                            <tr>
                                <td>Description</td>
                                <td>{{ $product->description }}</td>
                            </tr>
                            @if($product->shortdesc)
                            <tr>
                                <td>Short Description</td>
                                <td>{{ $product->shortdesc }}</td>
                            </tr>
                            @endif 
                            {{-- <tr>
                                <td>Price</td>
                                <td>{{ $product->price }}</td>
                            </tr> 
                            <tr>
                                <td>Sale Price</td>
                                <td>{{ $product->sale_price }}</td>
                            </tr>   --}}
                            <tr>
                                <td>Category</td>
                                <td>{{ $product->category->name }}</td>
                            </tr> 
                            <tr>
                                <td>Feature Image</td>
                                <td><img src="{!! asset('Products/'.$product->image) !!}" style="height:50px;width:50px;"></td>
                            </tr> 
                            @if(isset($images) && $images)
                            <tr>
                                    <td>Other Image</td>
                            @foreach($images as $img_name)

                                    <td><img src="{!! asset('Products/'.$img_name->image) !!}" style="height:50px;width:50px;"></td>
                                
                            @endforeach
                            </tr>
                            @endif
                            <tr>
                                <td>Type</td>
                                <td>{{ $product->type }}</td>
                            </tr>
                            <tr>
                                <td>Brand</td>
                                <td>{{ $product->brand }}</td>
                            </tr>
                            <tr>
                                <td>Model</td>
                                <td>{{ $product->model }}</td>
                            </tr>
                            <tr>
                                <td>Series</td>
                                <td>{{ $product->series }}</td>
                            </tr>
                            <tr>
                                <td>Rated Power Output (in kW)</td>
                                <td>{{ $product->rated_power_output }}</td>
                            </tr>
                            <tr>
                                <td>AC Power Rating</td>
                                <td>{{ $product->ac_power_rating }}</td>
                            </tr>
                            <tr>
                                <td>Solar DC Rating</td>
                                <td>{{ $product->solar_dc_rating }}</td>
                            </tr>
                            <tr>
                                <td>Battery Rated Storage Capacity</td>
                                <td>{{ $product->battery_rated_storage_capacity }}</td>
                            </tr>
                            <tr>
                                <td>Battery Type</td>
                                <td>{{ $product->battery_type }}</td>
                            </tr>
                            <tr>
                                <td>Approved Inverter</td>
                                <td>{{ $product->approved_inverter }}</td>
                            </tr>
                            <tr>
                                <td>Export Limit</td>
                                <td>{{ $product->export_limit }}</td>
                            </tr>
                            <tr>
                                <td>SOP 33-06 Compliant</td>
                                <td>{{ $product->sop3306_compliant }}</td>
                            </tr>
                            <tr>
                                <td>AS4777 Compliant</td>
                                <td>{{ $product->as4777_compliant }}</td>
                            </tr>
                            <tr>
                                <td>Capacity</td>
                                <td>{{ $product->capacity }}</td>
                            </tr>
                            <tr>
                                <td>Certifying Authority Certificate Number</td>
                                <td>{{ $product->certifying_authority_certificate_number }}</td>
                            </tr>
                            <tr>
                                <td>Inverter Phase </td>
                                <td>{{ $product->inverter_phase }}</td>
                            </tr>
                            

                                            
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection