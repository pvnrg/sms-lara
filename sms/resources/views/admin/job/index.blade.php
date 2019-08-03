@extends('layouts.backend')

@section('content')
        <div class="row">
            <div class="col-md-12">
              <div class="box bordered-box blue-border">
                              <div class="box-header blue-background">
                                                  <div class="title">
                                                      <i class="icon-circle-blank"></i>
                                                     Job  @if($customer != '') 
                                                     #{{$customer->first_name}}
                                                      @endif
                                                  </div>

                               </div>
                               <div class="box-content ">
                                    <a href="{{ URL::previous() }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                       
						<div class="col-md-12 col-sm-12 col-xs-12">	

							<div class="navbar-form navbar-right col-md-4 col-sm-4">
								
								{!! Form::label('filter', 'Filter By: ') !!} 
								@if(Auth::user()->roles[0]->name == "Installers")
								{!! Form::select('filter',array('All'=>'All','Open'=>'Open','Cancelled'=>'Cancelled','Completed'=>'Completed'),'',['class'=>'form-control','id' => 'filter']) !!}
								@else
								{!! Form::select('filter',array('Open'=>'Open','Cancelled'=>'Cancelled','Completed'=>'Completed','All'=>'All'),'',['class'=>'form-control','id' => 'filter']) !!}
								@endif
								
							</div>
							
						</div>	

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-borderless" id="job-table">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Customer Name</th>
                                        <th>Last Name</th>
                                        <th>Payment Mode</th>
                                        <th>Pre Approved</th>
                                        <th>Installation Date</th>
                                        <th>Status</th>
                                        <th>Email to Retailer</th>
                                        <th>STC Completed</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>

                            </table>
                          
                        </div>

                    </div>
                </div>
            </div>
        </div>
    <!--  Add  or change Pre Approval Number  Modal -->
    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">   
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title"></h4>
            </div>
            <div class="modal-body">
              <form id="number_form" name="number_form" > 
                  <input type="hidden" name="job_id" id="job_id" value=""/>
                  <label>Enter Pre Approval Number :</label>
                  <input type="text" name="pre_approval_number" id="pre_approval_number">
                  <button  name="submit" class="btn btn-default">Submit</button>
                  <p id="error" style="color:red;"></p>
              </form>
            </div>
          </div>
        </div>
      </div>
@endsection

@push('js')
<script>

        var url ="{{ url('admin/job-data') }}";
        var edit_url = "{{ url('admin/job') }}";
        var customer_url = "{{ url('admin/customer') }}";
        var email_url = "{{ url('admin/email_to_retailer') }}";
        var img_path = "{{asset('assets/images')}}";
        var q_url = "{{ url('admin/questions') }}";

        //Permissions
        var edit_job = "<?php echo Auth::user()->can('access.job.edit'); ?>";
        var delete_job = "<?php echo Auth::user()->can('access.job.delete'); ?>";
        
        datatable = $('#job-table').DataTable({
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
                    d.customer_id = "{{ $customer_id }}" ;                                    
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
                            if(o.customer_name)
                                return "<a href='"+customer_url+"/"+o.customer_id+"'>"+o.customer_name+"</a>";  
                            else
                                return '-'; 
                        }
                    },  
                    { data: 'last_name',name:'parties.last_name',visible:false},
                    { data: 'deposit_or_finance',name:'deposit_or_finance', defaultContent:'-',searchable:true , orderable :true},
                    { 
                        "data" : null,
                        "name" : 'pre_approval_number',
                        "searchable" : false,
                        "orderable" : false,
                        render : function(o){

                            var pre_number = "";
                            if(o.pre_approval_number == '' || o.pre_approval_number == null){
                                pre_number =  "<button id='number_modal' title='Add Pre Approval Number' class='btn btn-warning btn-xs' name='job_id' value='"+o.id+"' data-value='' >No</button>&nbsp;";
                            }else{
                                pre_number =  "<button id='number_modal' title='Change Pre Approval Number' class='btn btn-warning btn-xs' name='job_id' value='"+o.id+"' data-value='"+o.pre_approval_number+"'>Yes</button>&nbsp;" + o.pre_approval_number ;
                            }
                            return pre_number ;

                        }
                    },
                    { data: 'installation_date',name:'installation_date', defaultContent:'-', searchable:true , orderable :true},
                    { 
                        "data" : null, 
                        "name" : 'status',
                        "searchable" : false,
                        render : function(o){
                            var status = "" ;
                            var value= o.status;
                            if(value == "Open"){
                                status = "<select name='job_status' id='job_status' data-id='"+o.id+"' ><option value='Open' selected > Open</option><option value='Cancelled'>Cancelled</option><option value='Completed' >Completed</option><option value='Customer Approval' >Customer Approval</option></select>" ;
                            }else if (value == "Completed"){
                                status = "<select name='job_status' id='job_status' data-id='"+o.id+"' ><option value='Open'  > Open</option><option value='Cancelled'>Cancelled</option><option value='Completed' selected >Completed</option><option value='Customer Approval' >Customer Approval</option></select>" ;
                            }else if (value == "Customer Approval"){
                                status = "<select name='job_status' id='job_status' data-id='"+o.id+"' ><option value='Open'  > Open</option><option value='Cancelled'>Cancelled</option><option value='Completed' >Completed</option><option value='Customer Approval' selected >Customer Approval</option></select>" ;
                            }else{
                                status = "<select name='job_status' id='job_status' data-id='"+o.id+"' ><option value='Open'  > Open</option><option value='Cancelled' selected>Cancelled</option><option value='Completed'  >Completed</option><option value='Customer Approval' >Customer Approval</option></select>" ; 
                            }
                            
                            return status ;
                          
                        }
                    },
                    { 
                        "data" : null, 
                        "name" : 'email_to_retailer',
                        "searchable" : true,
                        "orderable" : true,
                        render : function(o){
                            var email = " - " ;
                            if(o.status == "Completed"){
                                if(o.email_to_retailer == 'Yes')
                                    email = "<a href='#' title=''><button disabled class='btn btn-warning btn-xs'>Email Sent</button></a>";
                                else
                                    email = "<a href='"+email_url+"/"+o.id+"' title='Send Email to Retailer'><button class='btn btn-warning btn-xs'>Send Email</button></a>" ;
                            }
                            
                            return email ;
                          
                        }
                    },
                    { 
                        "data" : null,
                        "name" : "pvd",
                        "searchable" : false,
                        "orderable" : true,
                        render : function(o){
                            if(o.pvd == '' || o.pvd == null)
                                return "<button class='btn btn-primary btn-xs' title='STC Completed' > NO </button>"; 
                            else
                                return "<button class='btn btn-warning btn-xs' title='STC Not Completed' > YES </button>"; 
                        }
                    },
   
                    { 
                        "data": null,
                        "searchable": false,
                        "orderable": false,
                        "render": function (o) {
                            var v="" ; var e=""; var d=""; var q= "";

                            v = "<a href='"+edit_url+"/"+o.id+"' value="+o.id+" data-id="+o.id+" ><button class='btn btn-primary btn-xs'><i class='fa fa-eye' aria-hidden='true'></i>View</button></a>&nbsp;";

                            if(edit_job){
                                e= "<a href='"+edit_url+"/"+o.id+"/edit' value="+o.id+" data-id="+o.id+" class='edit-item' ><button class='btn btn-primary btn-xs'><i class='fa fa-pencil-square-o' aria-hidden='true'></i>Edit</button></a>&nbsp;";
                            }
                               
                            if(delete_job){
                                d = "<a href='javascript:void(0);' class='del-item' data-id="+o.id+" ><button class='btn btn-danger btn-xs'><i class='fa fa-trash-o' aria-hidden='true'></i> Delete</button></a>&nbsp;";
                            }

                            q = "<a href='"+q_url+"/"+o.id+"' value="+o.id+" data-id="+o.id+"><button class='btn btn-warning btn-xs'> Questionarie </button></a>&nbsp;";
                            
                            return v+e+d+q;
                        }
                    
                    
                    }
                ]
        });

        $(document).on('click', '.del-item', function (e) {
            var id = $(this).attr('data-id');
            url = "{{url('admin/job')}}/" + id;
            var r = confirm("Are you sure you want to delete Job?");
            if (r == true) {
                $.ajax({
                    type: "delete",
                    url: url ,
                    headers: {
                        "X-CSRF-TOKEN": "<?php echo csrf_token();?>"
                    },
                    success: function (data) {
                        datatable.draw();
                        toastr.success('Job Deleted Successfully', data.message)
                    },
                    error: function (xhr, status, error) {
                        datatable.draw();
                        var erro = ajaxError(xhr, status, error);
                        toastr.error('Action Not Procced!',erro)
                    }
                });
            }
        });

        $('#filter').change(function() {
            datatable.draw();
        });
        
        $("#job-table").on("change", "select#job_status", function () {
            
            var value = $(this).val();
            var id = $(this).attr('data-id');
            var url =  "{{url('admin/job')}}/"+id+"?status="+value ;
            if(value != null){
                $.ajax({
                    type: "get",
                    url: url,
                    headers: {
                        "X-CSRF-TOKEN": "<?php echo csrf_token();?>"
                    },
                    success: function (data) {
                        datatable.draw();
                        toastr.success("Job's Status Changed Successfully", data.message)
                    },
                    error: function (xhr, status, error) {
                         datatable.draw();
                        var erro = ajaxError(xhr, status, error);
                        toastr.error("Job Completion does not Approved by the Customer yet !!",erro)
                    }
                    
                });
            }
        });
    
        $(document).on('click', '#number_modal', function (e) {
            var job_id = $(this).val();
            var data_value = $(this).attr('data-value');
            var formid = $("#number_form");
            resetupdateform(formid);
            $('#myModal').modal('show');
            $('#job_id').val(job_id);
            $('#pre_approval_number').val(data_value);
        }); 

        function resetupdateform(formid) {
            $(formid)[0].reset();
            $('#error').html("");
        }

$("#number_form").validate({
    
    submitHandler: function (form) {
        var pre_approval_number = $('#pre_approval_number').val();
        var job_id = $('#job_id').val();
        if(pre_approval_number == ""){
            document.getElementById("error").innerHTML = "Field cannot be blank";
            return false;
        }
        var url = "{{url('admin/pre_approval_number')}}/"+job_id;
        var method = "get";
        $.ajax({
            type: method,
            url: url,
            data: $(form).serialize(),
            beforeSend: function () {
            },
            success: function (result)
            {
                $('#myModal').modal('hide');
                toastr.success(result.message)
                datatable.draw();
               
            },
            error: function (error) {
                
                toastr.error(error.responseJSON.message);
                datatable.draw();
                $('#myModal').modal('hide');
                
            }
        }); 
        return false;
    }
});
    
</script>
@endpush
