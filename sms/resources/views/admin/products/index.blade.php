@extends('layouts.backend')

@section('title','Products')
@section('pageTitle','Products')

@section('content')
    <div class="row">

        <div class="col-md-12">
            <div class="box bordered-box blue-border">
                <div class="box-header blue-background">
                                                  <div class="title">
                                                      <i class="icon-circle-blank"></i>
                                                      Products
                                                  </div>

                               </div>
                <div class="box-content ">


                    <div class="row">
                        <div class="col-md-6">
                                @if(Auth::user()->can('access.product.edit'))
                                <a href="{{ url('/admin/products/create') }}" class="btn btn-success btn-sm"
                                   title="Add New Document">
                                    <i class="fa fa-plus" aria-hidden="true"></i> Add New Product
                                </a>
                                @endif

                        </div>

                        {{-- <div class="col-md-6">
                            {!! Form::open(['method' => 'GET', 'url' => '/admin/products', 'class' => 'navbar-form navbar-right', 'role' => 'search'])  !!}
                            <input type="search" class="form-control search" name="search" placeholder="{{Request::get('search')}}" value="{!! request()->get('search') !!}">
                            
                            {!! Form::close() !!}
                            </div>
                        </div>
                      --}}

                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::open(['method' => 'GET', 'url' => '/admin/products-data', 'class' => 'navbar-form navbar-right']) !!} 
                            {!! Form::label('filter', 'Filter By: ') !!} 
                            {!! Form::select('filter',array('all'=>'All','0'=>'Not Featured','1'=>'Featured'),'',['class'=>'form-control','id' => 'filter']) !!}
                            {!! Form::close() !!}
                        </div>
                    </div>

                
                    <div class="table-responsive">
                        <table class="table table-borderless" id="products-table">
                            <thead>
                            <tr>
                                <th>Id</th>                         
                                <th>Name</th>
                                <th>Brand</th>
                                <th>Rated Power Output (in Watt)</th>
                                <th>Image</th>   
                                <th>Category</th>
                                <th>Featured</th>
                                <th>Actions</th>                        
                            </tr>
                            </thead>
                            {{-- <tbody>
                                    @foreach($products as $item)
                                    
                                    <tr>
                                        <td> {{$item->id}}</td>
                                        <td> {{$item->name}}</td>
                                        <td> {{$item->rated_power_output}}</td>
                                        <td>
                                           @if($item->image) 
                                            <img src="{!! asset('Products/'.$item->image) !!}" style="height:50px;width:50px;"> </td>
                                            @else
                                            @endif
                                        <td>{{$item->cat_name}}</td>
                                        <td>
                                                @if($item->feature == 1)
                                                <a href="{{url('/admin/make_feature/'.$item->id.'?feature=0')}}" title="Change to No"><button disabled class="btn btn-warning btn-xs">Yes</button></a>
                                                @else
                                                <a href="{{url('/admin/make_feature/'.$item->id.'?feature=1')}}" title="Change to Yes"><button class="btn btn-primary btn-xs">No</button></a>
                                                @endif
                                                 
                                        </td>
                                            
                                        <!-- <td>{{$item->price}}</td>
                                        <td>{{$item->sale_price}}</td> -->
                                        <td>
        
                                                <a href="{{ url('/admin/products/' . $item->id) }}" title="View product">
                                                    <button class="btn btn-info btn-xs"><i class="fa fa-eye"
                                                                                           aria-hidden="true"></i> View
                                                    </button>
                                                </a>
        
                                                 @if(Auth::user()->can('access.product.edit')) 
        
                                                    <a href="{{ url('/admin/products/' . $item->id . '/edit') }}"
                                                       title="Edit product">
                                                        <button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o"
                                                                                                  aria-hidden="true"></i> Edit
                                                        </button>
                                                    </a>
                                                @endif
        
                                                @if(Auth::user()->can('access.product.delete'))
        
                                                    {!! Form::open([
                                                        'method' => 'DELETE',
                                                        'url' => ['/admin/products', $item->id],
                                                        'style' => 'display:inline'
                                                    ]) !!}
                                                    {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                                            'type' => 'submit',
                                                            'class' => 'btn btn-danger btn-xs',
                                                            'title' => 'Delete product',
                                                            'onclick'=>'return confirm("Confirm delete?")'
                                                    )) !!}
                                                    {!! Form::close() !!}
                                                @endif
        
                                            </td>
                                    </tr>   
                                    @endforeach
                            </tbody> --}}
                        </table>
                    </div>
                    {{-- <div class="pagination-wrapper"> {!! $products->appends(['search' => Request::get('search')])->render() !!} </div> --}}
                </div>
            </div>
        </div>
    </div>
@endsection


@push('js')

    <script>

        var url ="{{ url('admin/products-data') }}";
        var edit_url = "{{ url('admin/products') }}";
        var img_path = "{{asset('Products/')}}";
        var make_feature = "{{ url('/admin/make_feature') }}";

        //Permissions
        var edit_product = "<?php echo Auth::user()->can('access.product.edit'); ?>";
        var delete_product= "<?php echo Auth::user()->can('access.product.delete'); ?>";
       
        
        datatable = $('#products-table').DataTable({
            processing: true,
            serverSide: true,
            "caseInsensitive": false,
            "order": [[0,"desc"]], 
            ajax: {
                url:url,
                type:"get",
                data: function (d)  {
                    d.filter = $('#filter').val();
                }
            },
                columns: [
                    { data: 'id', name: 'id',  "orderable":true,searchable:true },
                    { data: 'name', name: 'name', "orderable":true, searchable:true },
                    { data: 'brand', name: 'brand', "orderable":true, searchable:true, "defaultContent":"-" },
                    { data: 'rated_power_output', name: 'rated_power_output', "orderable":true, searchable:true },
                    { 
                        "data": null,
                        "searchable": false,
                        "orderable": false,
                        "render": function (o) {
                            var img = o.image ; var image = "";
                            if(img != ''){
                                image = "<img src='"+img_path+"/"+o.image+"' alt='"+o.image+"' width='50px' height='50px' />&nbsp;";
                            }

                            return image ;
                            
                        }
                    
                    
                    },
                    { 
                        "data": null,
                        "searchable": false,
                        "orderable": false,
                        "render": function (o) {
                            if(o.category != ''){
                                return o.category.name ;
                            }else{
                                return ' ' ;
                            }    
                        }
                    },
                    { 
                        "data": null,
                        "searchable": false,
                        "orderable": false,
                        "render": function (o) {
                            var faeture = "" ;
                            
                            if(o.feature == 1){
                                feature = "<a href='"+make_feature+"/"+o.id+"?feature=0' title='Change to No'><button class='btn btn-warning btn-xs'>YES</button></a>&nbsp;";
                            }else{
                                feature = "<a href='"+make_feature+"/"+o.id+"?feature=1' title='Change to Yes'><button class='btn btn-primary btn-xs'>NO</button></a>&nbsp;";
                            }   
                            return feature ; 
                        }
                    },
                  
                    { 
                        "data": null,
                        "searchable": false,
                        "orderable": false,
                        "render": function (o) {
                            var v="" ; var e=""; var d=""; 
                            
                            v = "<a href='"+edit_url+"/"+o.id+"' value="+o.id+" data-id="+o.id+" ><button class='btn btn-primary btn-xs'><i class='fa fa-eye' aria-hidden='true'></i>View</button></a>&nbsp;";

                            if(edit_product){
                                e= "<a href='"+edit_url+"/"+o.id+"/edit' value="+o.id+" data-id="+o.id+" class='edit-item' ><button class='btn btn-primary btn-xs'><i class='fa fa-pencil-square-o' aria-hidden='true'></i>Edit</button></a>&nbsp;";
                            }
                               
                            if(delete_product){
                                d = "<a href='javascript:void(0);' class='del-item' data-id="+o.id+" ><button class='btn btn-danger btn-xs'><i class='fa fa-trash-o' aria-hidden='true'></i> Delete</button></a>&nbsp;";
                            }

                            return v+e+d;
                        }
                    
                    
                    }
                ]
        });

        $(document).on('click', '.del-item', function (e) {
            var id = $(this).attr('data-id');
            url = "{{url('admin/products')}}/" + id;
            var r = confirm("Are you sure you want to delete Product?");
            if (r == true) {
                $.ajax({
                    type: "delete",
                    url: url ,
                    headers: {
                        "X-CSRF-TOKEN": "<?php echo csrf_token();?>"
                    },
                    success: function (data) {
                        datatable.draw();
                        toastr.success(data.messages)
                    },
                    error: function (xhr, status, error) {
                        var erro = ajaxError(xhr, status, error);
                        toastr.error('Action Not Procced!',erro)
                    }
                });
            }
        });

        $('#filter').change(function() {
            datatable.draw();
        });

    </Script>
    
@endpush




