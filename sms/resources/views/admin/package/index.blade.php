@extends('layouts.backend')

@section('title','Packages')
@section('pageTitle','Packages')

@section('content')
    <div class="row">

        <div class="col-md-12">
            <div class="box bordered-box blue-border">
                <div class="box-header blue-background">
                                                  <div class="title">
                                                      <i class="icon-circle-blank"></i>
                                                      Packages
                                                  </div>

                               </div>
                <div class="box-content ">


                    <div class="row">
                        <div class="col-md-6">
                                @if(Auth::user()->can('access.package.create'))
                                <a href="{{ url('/admin/packages/create') }}" class="btn btn-success btn-sm"
                                   title="Add New Document">
                                    <i class="fa fa-plus" aria-hidden="true"></i> Add New Package
                                </a>
                                @endif

                        </div>

                        {{--  <div class="col-md-6">
                            {!! Form::open(['method' => 'GET', 'url' => '/admin/packages', 'class' => 'navbar-form navbar-right', 'role' => 'search'])  !!}
                            <input type="search" class="form-control search" name="search" placeholder="{{Request::get('search')}}" value="{!! request()->get('search') !!}">
                            
                            {!! Form::close() !!}
                            </div>
                        </div>  --}}
                    


                    <div class="table-responsive">
                        <table class="table table-borderless" id="package-table">
                            <thead>
                            <tr>
                                <th>Id</th>                         
                                <th>Title</th>
                                <th>Price</th>   
                                <th>Product</th>
                                <th>Rated Power Output (in Watt)</th>
                                <th>Actions</th>                        
                            </tr>
                            </thead>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')

    <script>

        var url ="{{ url('admin/package-data') }}";
        var edit_url = "{{ url('admin/packages') }}";
        var img_path = "{{asset('assets/images')}}";

        //Permissions
        var edit_package = "<?php echo Auth::user()->can('access.package.edit'); ?>";
        var delete_package= "<?php echo Auth::user()->can('access.package.delete'); ?>";
        var add_package_folder = "<?php echo Auth::user()->can('access.package.addfolder'); ?>";
        var add_duplicate_package = "<?php echo Auth::user()->can('access.package.create'); ?>";
        
        datatable = $('#package-table').DataTable({
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
                    { data: 'title', name: 'title', "orderable":true, searchable:true },
                     // { data: 'price', name: 'price', "orderable":true, searchable:true },
                    { 
                        "data": null,
                        "name" : 'price',
                        "searchable": true,
                        "orderable": true,
                        "render": function (o) {                            
                            return "$ "+o.price;
                        }
                    
                    
                    },
                    { data : "package_product", name: "package_product" },
                    { data: 'kw', name: 'kw', orderable:true, searchable:true },
                    { 
                        "data": null,
                        "searchable": false,
                        "orderable": false,
                        "render": function (o) {
                            var v="" ; var e=""; var d=""; var add_folder = ""; var duplicate_package="";
                            
                            v = "<a href='"+edit_url+"/"+o.id+"' value="+o.id+" data-id="+o.id+" ><button class='btn btn-primary btn-xs'><i class='fa fa-eye' aria-hidden='true'></i>View</button></a>&nbsp;";

                            if(edit_package){
                                e= "<a href='"+edit_url+"/"+o.id+"/edit' value="+o.id+" data-id="+o.id+" class='edit-item' ><button class='btn btn-primary btn-xs'><i class='fa fa-pencil-square-o' aria-hidden='true'></i>Edit</button></a>&nbsp;";
                            }
                               
                            if(delete_package){
                                d = "<a href='javascript:void(0);' class='del-item' data-id="+o.id+" ><button class='btn btn-danger btn-xs'><i class='fa fa-trash-o' aria-hidden='true'></i> Delete</button></a>&nbsp;";
                            }

                            if(add_package_folder){
                                add_folder = "<a href='"+edit_url+"/addfolder/"+o.id+"' value="+o.id+" data-id="+o.id+" ><button class='btn btn-warning btn-xs'>Add Files</button></a>&nbsp;";
                            }
                            if(add_duplicate_package){
                                duplicate_package = "<a href='"+edit_url+"/duplicate/"+o.id+"' value="+o.id+" data-id="+o.id+" ><button class='btn btn-warning btn-xs'>Duplicate</button></a>&nbsp;";
                            }
                            

                            
                            return v+e+d+add_folder+duplicate_package;
                        }
                    
                    
                    }
                ]
        });

        $(document).on('click', '.del-item', function (e) {
            var id = $(this).attr('data-id');
            url = "{{url('admin/packages')}}/" + id;
            var r = confirm("Are you sure you want to delete Package?");
            if (r == true) {
                $.ajax({
                    type: "delete",
                    url: url ,
                    headers: {
                        "X-CSRF-TOKEN": "<?php echo csrf_token();?>"
                    },
                    success: function (data) {
                        datatable.draw();
                        toastr.success('Package Deleted Successfully', data.message)
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

