@extends('layouts.backend') 
@section('title','Customer') 
@section('pageTitle','Customer') 
@section('content')
<div class="row">

    <div class="col-md-12">
        <div class="box bordered-box blue-border">
            <div class="box-header blue-background">
                <div class="title">
                    <i class="icon-circle-blank"></i> Customer
                </div>
            </div>
            <div class="box-content ">
                <div class="row">

                    <div class="col-md-6">
                        <a href="{{ url('/admin/customer/create') }}" class="btn btn-success btn-sm" title="Add New Customer"><i class="fa fa-plus" aria-hidden="true"></i> Add New Customer</a>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::open(['method' => 'GET', 'url' => '/admin/customer-data', 'class' => 'navbar-form navbar-right', 'role' => 'search']) !!} 
                            {!! Form::label('filter', 'Filter By: ') !!} 
                            {!! Form::select('filter',array('all'=>'All','0'=>'Lead','1'=>'Customer','2'=>'Prospect','3'=>'Lost'),'',['class'=>'form-control','id' => 'filter']) !!}
                            {!! Form::close() !!}
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-borderless datatable responsive" id="party-table">
                            <thead>
                                <tr>
                                    <th data-priority="0">Id</th>
                                    <th data-priority="3">Name</th>
                                    <th data-priority="3">Last Name</th>
                                    <th data-priority="4">Email</th>
                                    <th data-priority="5">Contact</th>
                                    <th data-priority="6">Region</th>
                                    <th data-priority="7">Source</th>
                                    <th data-priority="8">Assign Sales Rep</th>
                                    <th data-priority="8">Sales name</th>
                                    <th data-priority="9">Status</th>
                                    <th data-priority="10">Actions</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


<!--  Change-Sales  Modal -->
<div class="modal fade" id="changeCbRepresentative" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="account_form_model_lable">Change Sales Respresentative - <i id="customerChangeCbRep"></i></h5> 
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="bidder_list">
                    <div class=" bidder no-padding-left no-padding-right gutter-bottom">
                        <div class=" clearfix details-container details-port-container">
                            <form method="post" id="change_cb_rep_form" name="form">
                                <input  name="customer_id"  id="customer_id" type="hidden" value="0" >
                               
                                {{csrf_field()}} 
                                <div class="form-group prepend-top">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="pull-left required" for="Projects_title">Select Sales Rep : </label>

                                            <select id="cbsales" class="form-control" name="sales">
                                                @foreach($sales as $sale)
                                                <option value="{{$sale->id}}">{{$sale->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group prepend-top">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <button class="btn btn-read btn-inverted account_form_submit_button" type="submit" name="submit" value="submit">
                                                Change
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
 @push('js')

    <script>

        var url ="{{ url('admin/customer-data') }}";
        var edit_url = "{{ url('admin/customer') }}";
        var img_path = "{{asset('assets/images')}}";

        //Permissions
        var edit_customer = "<?php echo Auth::user()->can('access.customers.edit'); ?>";
        var delete_customer= "<?php echo Auth::user()->can('access.customers.delete'); ?>";
        var create_customer_offer = "<?php echo Auth::user()->can('access.customers.createoffer'); ?>";
        var add_customer_folder = "<?php echo Auth::user()->can('access.customers.addfolder'); ?>";
        var change_sales= "<?php echo Auth::user()->can('change.customers.sales'); ?>";
        var change_status= "<?php echo Auth::user()->can('change.customers.status'); ?>";
        
        datatable = $('#party-table').DataTable({
            responsive: true,
            processing: true,
            serverSide: true,
            stateSave: true,
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
                    
                    { data: 'created_at',name:'created_at',visible:false},
                    
                    { 
                        "data" : null,
                        "name" : 'parties.first_name',
                        "searchable" : true,
                        "orderable" : true,
                        render : function(o){
                          return o.customer_name;  
                        }
                    },
                    { data: 'last_name',name:'parties.last_name',visible:false},
                    { data: 'email',name:'email', searchable:true , orderable :true},
                    { data: 'phone_mobile', name: 'phone_mobile',searchable:true , orderable :true , defaultContent:"-"},
                    { data: 'state', name: 'state',searchable:true , orderable :true ,defaultContent:"-" },
                    { 
                        "data" : null, 
                        "name" : 'status',
                        "searchable" : false,
                        render : function(o){
                            if(o.status == 0)
                                return "CRM" ;
                            if(o.status == 1)
                                return "API" ;
                            if(o.status == 2)
                                return "Website" ;
                            if(o.status == 3)
                                return "Device" ;
                          
                        }
                    },
                    { 
                        "data" : null, 
                        "name" : 'sales_name',
                        "searchable" : false,
                        "orderable" : true,
                        "render": function (o) {
                            var sales = "";
                            if(!change_sales){
                                sales =  "<a href='#' class='open_model_for_change_cb_rep' data-customername='"+o.first_name+"' data-customerid ='"+o.id+"' data-oldcbrep='"+o.sales_id+"'><button title='Change Sales-Rep' class='btn btn-warning btn-xs'><i class='fa fa-edit' aria-hidden='true'></i></button></a>&nbsp;";
                            }
                            var sales_name = " ";
                            if(o.sales_name)
                                sales_name = o.sales_name ;
                            return sales +" "+ sales_name ;
                        }
                    },
                    { data: 'sales_name',name:'users.name',visible:false},
                    { 
                        "data" : null, 
                        "name" : 'customer_status',
                        "searchable" : false,
                        "orderable" : true,
                      
                        render : function(o){

                            if(change_status){

                                if(o.customer_status == 1)
                                status = "<select name='customer_status' id='customer_status' data-id='"+o.id+"'><option value='0' >Lead</option><option value='2'>Prospect</option><option value='1' selected>Customer</option><option value='3' >Lost</option></select>"; 
                             
                            else if(o.customer_status == 2)
                                status = "<select name='customer_status' id='customer_status' data-id='"+o.id+"' ><option value='0' >Lead</option><option value='2' selected >Prospect</option><option value='1' >Customer</option><option value='3'  >Lost</option></select>"; 

                            else if(o.customer_status == 0)
                                status = "<select name='customer_status' id='customer_status' data-id='"+o.id+"' ><option value='0' selected >Lead</option><option value='2'>Prospect</option><option value='1' >Customer</option><option value='3' >Lost</option></select>"; 

                            else
                                status = "<select name='customer_status' id='customer_status' data-id='"+o.id+"' ><option value='0' >Lead</option><option value='2'>Prospect</option><option value='1' >Customer</option><option value='3' selected >Lost</option></select>"; 


                            return status;


                            }else{
                                if(o.customer_status == 0)
                                    return "Lead" ;
                                if(o.customer_status == 1)
                                    return "Customer" ;
                                if(o.customer_status == 2)
                                    return "Prospect" ;
                                if(o.customer_status == 3)
                                    return "Lost" ;
                            }

                            
                            
                        }
                    },
                    { 
                        "data": null,
                        "searchable": false,
                        "orderable": false,
                        "render": function (o) {
                            var v="" ; var e=""; var d=""; var create_offer =""; var add_folder = ""; var offers=""; var jobs=""; 

                            v = "<a href='"+edit_url+"/"+o.id+"' value="+o.id+" data-id="+o.id+" ><button class='btn btn-primary btn-xs'><i class='fa fa-eye' aria-hidden='true'></i>View</button></a>&nbsp;";

                            if(edit_customer){
                                e= "<a href='"+edit_url+"/"+o.id+"/edit' value="+o.id+" data-id="+o.id+" class='edit-item' ><button class='btn btn-primary btn-xs'><i class='fa fa-pencil-square-o' aria-hidden='true'></i>Edit</button></a>&nbsp;";
                            }
                               
                            if(delete_customer){
                                d = "<a href='javascript:void(0);' class='del-item' data-id="+o.id+" ><button class='btn btn-danger btn-xs'><i class='fa fa-trash-o' aria-hidden='true'></i> Delete</button></a>&nbsp;";
                            }

                            if(create_customer_offer){
                                if(o.number_of_phase){
                                    create_offer = "<a href='"+edit_url+"/createoffer/"+o.id+"' value="+o.id+" data-id="+o.id+" ><button class='btn btn-warning btn-xs'>Create Offer</button></a>&nbsp;";
                                }
                            }

                            if(add_customer_folder){
                                add_folder = "<a href='"+edit_url+"/addfolder/"+o.id+"' value="+o.id+" data-id="+o.id+" ><button class='btn btn-warning btn-xs'>Folder - "+o.folders.length+" </button></a>&nbsp;";
                            }

                            offers = "<a href='{{url("/admin/offers")}}/"+o.id+"' value="+o.id+" data-id="+o.id+" ><button class='btn btn-warning btn-xs'>Offers - "+o.offer.length+"</button></a>&nbsp;";
                                
                            jobs = "<a href='{{url("/admin/job")}}?customer_id="+o.id+"' value="+o.id+" data-id="+o.id+" ><button class='btn btn-warning btn-xs'>Jobs - "+o.jobs.length+" </button></a>&nbsp;";
                            
                            return create_offer+v+e+d+add_folder+offers+jobs;
                        }
                    
                    
                    }
                ]
                
        });



        $(document).on('click', '.del-item', function (e) {
            var id = $(this).attr('data-id');
            url = "{{url('admin/customer')}}/" + id;
            var r = confirm("Are you sure you want to delete Customer? If you Delete the Customer its Folders, Offers and Jobs were also deleted");
            if (r == true) {
                $.ajax({
                    type: "delete",
                    url: url ,
                    headers: {
                        "X-CSRF-TOKEN": "<?php echo csrf_token();?>"
                    },
                    success: function (data) {
                        datatable.draw();
                        toastr.success('Customer Deleted Successfully', data.message)
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


        $("#party-table").on("change", "select#customer_status", function () {
            var value = $(this).val();
            var id = $(this).attr('data-id');
            var url =  "{{url('admin/customer')}}/"+id+"?status="+value ;
            if(value != null){
                $.ajax({
                    type: "get",
                    url: url,
                    headers: {
                        "X-CSRF-TOKEN": "<?php echo csrf_token();?>"
                    },
                    success: function (data) {
                        datatable.draw();
                        toastr.success("Customer's Status Changed Successfully", data.message)
                    },
                    error: function (xhr, status, error) {
                        var erro = ajaxError(xhr, status, error);
                        toastr.error('Action Not Procced!',erro)
                    }
                });
            }
        });


        $(document).on('click', '.open_model_for_change_cb_rep', function (e) {
            $('#customerChangeCbRep').html($(this).attr('data-customername'));
            $('#customer_id').val($(this).attr('data-customerid'));
            $('#oldcbrep_id').val($(this).attr('data-oldcbrep'));
            $("select#cbsales").val($(this).attr('data-oldcbrep'));
            var formid = $("#change_cb_rep_form");
            $('#changeCbRepresentative').modal('show');
        });
        
        $("#change_cb_rep_form").validate({
            rules: {
                sales: {
                    required: true,
                }
            },
            messages: {
                sales: {
                    required: "Select Sales Representative for Customer",
                }
            },
            submitHandler: function (form) {
                var url = "{{url('admin/customer/changeSales')}}";
                var method = "post"
                $.ajax({
                    type: method,
                    url: url,
                    data: $(form).serialize(),
                    beforeSend: function () {
                    },
                    success: function (result)
                    {
                        result = JSON.parse(result)
                        if(result.msg == 'Success')
                            toastr.success('Changed Successfully')
                        else
                            toastr.error('Something Went Wrong, Try Again!')
                        $('#changeCbRepresentative').modal('hide');
                        datatable.draw(); 
                    },
                    error: function (error) {
                        $('#changeCbRepresentative').modal('hide');
                        datatable.draw();
                    }
                }); 
                return false;
            }
        });

    </Script>
    
@endpush