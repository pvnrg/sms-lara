@extends('layouts.backend')

@section('content')
        <div class="row">
            <div class="col-md-12">
               <div class="box bordered-box blue-border">
                   <div class="box-header blue-background">
                                       <div class="title">
                                           <i class="icon-circle-blank"></i>
                                          Edit Job #{{ $job->id }}
                                       </div>

                    </div>
                    <div class="box-content ">


                        <a href="{{ url('/admin/job') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />

                        <div class="form-group">
                            {!! Form::label('status', 'Status', ['class' => 'col-md-2 control-label']) !!}
                            <div class="col-md-2">
                                <select name='job_status' id='job_status' data-id='{{$job->id}}' class="form-control">
                                    <option value='Open' @if($job->status == "Open") selected @else "" @endif >Open</option>
                                    <option value='Cancelled' @if($job->status == "Cancelled") selected @else "" @endif >Cancelled</option>
                                    <option value='Completed' @if($job->status == "Completed") selected @else "" @endif >Completed</option>
                                </select>
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="row">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>Customer Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td> {{$job->customer->first_name}} {{$job->customer->last_name}}</td>
                                        <td> {{$job->customer->email}}</td>
                                        <td> {{$job->customer->phone_mobile}}</td>
                                        <td> {{$job->customer->street_name}}, {{$job->customer->state}}</td>
                                        
                                    </tr>   
                                 
                                </tbody>
    
                            </table>
                        </div>
                        </div>
                    
                        

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::model($job, [
                            'method' => 'PATCH',
                            'url' => ['/admin/job', $job->id],
                            'class' => 'form-horizontal',
                            'files' => true
                        ]) !!}

                        @include ('admin.job.form', ['submitButtonText' => 'Update'])

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
@endsection

@push('js')
<script>
        
        $("#job_status").on("change", function () {
            
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
                        toastr.success("Job's Status Changed Successfully", data.message)
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
