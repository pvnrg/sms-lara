@extends('layouts.backend')

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">All {{ ucfirst(Route::currentRouteName()) }} List</h3>
                    @if(Auth::user()->can('access.user.create'))
                        <a href="{{ url('/admin/transactions/create') }}" class="btn btn-success btn-sm pull-right" title="Add New Transaction">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                    @endif
                </div>
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <!-- <th>Id</th> -->
                            <th>Client</th>
                            <th>Trade date</th>
                            <!-- <th>Transaction type</th> -->
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($transactions as $transaction)
                            <tr>
                                <!-- <td> {{$transaction->id}}</td> -->
                                <td> {{$transaction->client_name}}</td>
                                <td> {{$transaction->trade_date}}</td>
                                <td>
                                    <a href="{{ url('/admin/transactions/' . $transaction->id) }}" title="View Transaction">
                                        <button class="btn btn-info btn-xs">
                                            <i class="fa fa-eye" aria-hidden="true"></i> View
                                        </button>
                                    </a>
                                    @if(Auth::user()->can('access.user.edit'))
                                        <a href="{{ url('/admin/transactions/' . $transaction->id . '/edit') }}" title="Edit Transaction">
                                            <button class="btn btn-primary btn-xs">
                                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                                            </button>
                                        </a>
                                    @endif
                                    @if(Auth::user()->can('access.user.delete'))
                                        <form method="POST" action="{{ url('/admin/transactions'.'/'.$transaction->id) }}" accept-charset="UTF-8" style="display:inline" class = "confirm_delete">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-danger btn-xs" title="Delete Transaction"><i class="fa fa-trash-o" aria-hidden="true"> Delete</i></button>
                                        </form>
                                    @endif
                                </td>
                            </tr>   
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>   
        </div>
    </div>
@endsection
@section('footerExtra')
    <script>
        $( document ).ready(function() {
           
            var el = document.getElementsByClassName('confirm_delete');
        
            el[0].addEventListener('submit',
                    function(e) {
                        var form = this;
                        e.preventDefault();
                        swal({
                                title: "Are you sure?",
                                text: "Once deleted, you will not be able to recover this Lead !",
                                type: "warning",
                                showCancelButton: true,
                                confirmButtonColor: '#DD6B55',
                                confirmButtonText: 'Yes, delete it!',
                                cancelButtonText: "Cancel",
                                closeOnConfirm: false,
                                closeOnCancel: false
                            },
                            function(isConfirm) {
                                if (isConfirm) {
                                    swal({
                                        title: 'Success!',
                                        type: 'success'
                                    }, function() {
                                        form.submit();
                                    });
                                } else {
                                    swal("Cancel","","error");
                                }
                            });
                        
                        });

            $('.users_status').on('click',function() {
                var user_id = $(this).attr('user_id');
                var status=$(this).val();
                $.ajax({
                    data:{ id : user_id,status:status, _token: '{!! csrf_token() !!}'},
                    url: '{!! route('StatusChangeController') !!}',
                    type: 'POST',
                    dataType: 'json',

                    success:function(data)
                    {
                      if(data.success)
                      {
                        swal("Status updated success fully!");
                     
                      }
                      else {
                        swal("Status not updated success fully!");
                          }
                    }
                });
            });
        
        });

    </script>

@endsection




