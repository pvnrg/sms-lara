@extends('layouts.backend')

@section('title','Customer Offers')

@section('pageTitle')
    <i class="icon-tint"></i>
    <span>Customer Offers</span>
@endsection


@section('content')
        <div class="row">
            <div class="col-md-12">
                <div class="box bordered-box blue-border">
                    <div class="box-header blue-background">
                                                      <div class="title">
                                                          <i class="icon-circle-blank"></i>
                                                         Customer Offers - {{$customer->first_name}}
                                                      </div>
    
                                   </div>
                    <div class="box-content ">
                        <a href="{{ url('/admin/customer') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back </button></a>
                        <br />
                        <br />


                    @if(isset($customer->offer))
                    <div class="table-responsive">
                             <table class="table table-borderless" id="offer_table">
                            <thead>
                            <tr>
                                <th data-priority="1">Offers</th>   
                                <th data-priority="1">Date</th>  
                                <th data-priority="1">Follow Up</th> 
                                <th data-priority="1">Finance Mode</th> 
                                <th data-priority="1">Status</th>
                                <th data-priority="1">Action</th>                                               
                            </tr>
                            </thead>
                            @foreach($customer->offer as $item)
                            <tr>
                                <td>Offer - {{$item->id}}</td>
                                <td>@if(isset($item->created_at)){{$item->created_at->format('d-m-Y')}}@endif</td>
                                <td>{{--@if($item->status == "Awaiting for customer")
                                        <select name="follow_up" id="follow_up" data-id="{{$item->id}}">
                                            <option value="1" @if($item->follow_up == 1) selected @else "" @endif>Follow Up 1</option>
                                            <option value="2" @if($item->follow_up == 2) selected @else "" @endif >Follow Up 2</option>
                                            <option value="3" @if($item->follow_up == 3) selected @else "" @endif >Follow Up 3</option>
                                        </select>
                                    @else
                                        Follow up {{$item->follow_up}} 
                                    @endif  --}}
                                    @if($item->status == "Awaiting for customer" && $item->mail_counter > 0)
                                        Follow Up {{$item->mail_counter}} - {{$item->mail_date}}
                                    @else - 
                                    @endif

                                </td>
                                <td>@if($item->status != "Awaiting for customer")
                                        @if(isset($item->job))
                                            <select name="mode" id="mode" data-id="{{$item->job->id}}">
                                                    <option value="Not Completed" @if($item->job->deposit_or_finance == "Not Completed") selected @else "" @endif>Not Completed</option>
                                                    <option value="Deposit" @if($item->job->deposit_or_finance == "Deposit") selected @else "" @endif>Deposit</option>
                                                    <option value="Finance" @if($item->job->deposit_or_finance == "Finance") selected @else "" @endif >Finance</option>
                                                   
                                                </select>
                                        
                                        @else
                                                -
                                        @endif
                                    @else -
                                    @endif
                                </td>
                                <td>
                                    {!! Form::open([
                                        'method' => 'POST',
                                        'id' => 'statusForm_'.$item->id,
                                        'url' => ['/admin/changestatusoffer', $item->id],
                                        'style' => 'display:inline'
                                    ]) !!}
                                    <input type='hidden' name="package_id" id="package_id_{{$item->id}}" value="0">
                                        {!! Form::select('status', ['Awaiting for customer'=>'Awaiting for customer','Accepted'=>'Accepted','Declined'=>'Declined'],
                                        (isset($item->status) && $item->status != '' ) ? $item->status : '' ,['class' => 'form-control statusdrop',
                                        "onchange" => "onChnageStatus(this.value,$item->id);","disabled" => ($item->status == 'Declined' 
                                        || $item->status == 'Accepted') ? true : false ]) !!}
                                    
                                    {{--  <input type="hidden" name="mode" id="mode_{{$item->id}}" />  --}}
                                    {!! Form::close() !!}
                                </td>
                                <td>    
                                    <a href="{{ url('/admin/viewoffer/' . $item->id) }}" title="View Offer">
                                        <button class="btn btn-default btn-xs"> View & Edit
                                        </button>
                                    </a>
                                    <a href="{{ url('/admin/customer/offerpdf/' . $item->id) }}" title="Download PDF">
                                        <button class="btn btn-warning btn-sm"><i class="fa fa-download" aria-hidden="true"></i> Download PDF
                                        </button>
                                    </a>   
                                    
                                    {!! Form::open([
                                        'method' => 'DELETE',
                                        'url' => ['/admin/deleteoffer', $item->id],
                                        'style' => 'display:inline'
                                    ]) !!}
                                    {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                            'type' => 'submit',
                                            'class' => 'btn btn-danger btn-xs',
                                            'title' => 'Delete Folder',
                                            'onclick'=>'return confirm("Confirm delete?")'
                                    )) !!}
                                    {!! Form::close() !!}
                                    @if(isset($item->job))
                                    <a href="{{ url('/admin/job/' . $item->job->id.'/edit') }}" title="View Job">
                                        <button class="btn btn-warning btn-sm"><i class="fa fa-jobs" aria-hidden="true"></i> Job
                                        </button>
                                    </a>
                                    @else
                                    
                                    @endif

                                </td>
                               
                            </tr>   
                            @endforeach
                        </table>
                        </div>
                    @endif

                    </div>
                </div>
            </div>
        </div>
        <script>
            function onChnageStatus(val,id)
            {
                
                if(val == 'Accepted')
                {
                    var addString = '';
                    $.ajax({url: "../ajaxLoadOffers/"+id, 
                    success: function(result){
                        addString += "<label> Select Package </label> <select name='product' id='package_customer' required onchange='packageSelect(this,"+id+")'><option value=''>Select Package </option>";
                        $.each( result.offer.offer_detail, function( key, value ) {
                            var package_obj = JSON.parse(value.package_obj);
                            addString += "<option value='"+package_obj.id+"'>"+package_obj.title+"</option>";
                          });
                            addString += "</select>";
                        
                          addString += " <div class='modal-footer'>\
                                <button class='btn btn-default' onclick='formSubmit("+id+")'>Create Job</button>\
                                <button type='button' class='btn btn-default' data-dismiss='modal' onclick='location.reload()' >Close</button>\
                                </div>";
                        $('.modal-body').html(addString);
                        $('#settingModal').modal('show');
                    }});
                    return false;
                }
                $('#statusForm_'+id).submit();
            }      
            function packageSelect(sel,id) {
                $('#package_id_'+id).val(sel.value);
            }          
            function formSubmit(id){
                if($('#package_customer').val() > 0 && $('#package_customer').val() != ''){
                    /*  $('#mode_'+id).val($('.payment_mode:checked').val());  */
                    $('#statusForm_'+id).submit();
                }else{
                    alert('Please Select Atleast one Package');
                    return false;
                }
            }
        </script>

        <div class="modal fade" id="settingModal" role="dialog">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Package</h4>
                </div>
                <div class="modal-body">
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection

@push('js')
<script>
        $("#offer_table").on("change", "select#mode", function () {
            var value = $(this).val();
            var id = $(this).attr('data-id');
            var url =  "{{url('admin/customer/offer')}}/"+id+"?mode="+value ;
            if(value != null){
                $.ajax({
                    type: "get",
                    url: url,
                    headers: {
                        "X-CSRF-TOKEN": "<?php echo csrf_token();?>"
                    },
                    success: function (data) {
                        toastr.success("Changed Successfully", data.message)
                    },
                    error: function (xhr, status, error) {
                        var erro = ajaxError(xhr, status, error);
                        toastr.error('Action Not Procced!',erro)
                    }
                });
            }
        });
</script>
@endpush



