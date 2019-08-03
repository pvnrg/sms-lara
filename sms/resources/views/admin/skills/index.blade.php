@extends('layouts.backend')

@section('title','Skills')

@section('pageTitle','Skills')

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">All {{ ucfirst(Route::currentRouteName()) }} List</h3>
                    @if(Auth::user()->can('access.role.create'))
                        <a href="{{ url('/admin/skills/create') }}" class="btn btn-success btn-sm pull-right"
                            title="Add New Role">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                    @endif
                </div>
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>                               
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($skills as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>
                                        <a href="{{ url('/admin/skills/' . $item->id) }}" title="View Role">
                                            <button class="btn btn-info btn-xs">
                                            <i class="fa fa-eye" aria-hidden="true"></i> View
                                            </button>
                                        </a>       
                                        
                                        @if(Auth::user()->can('access.skills.edit'))
                                            <a href="{{ url('/admin/skills/' . $item->id . '/edit') }}"
                                                title="Edit Skill">
                                                <button class="btn btn-primary btn-xs"><i
                                                            class="fa fa-pencil-square-o"
                                                            aria-hidden="true"></i> Edit
                                                </button>
                                            </a>
                                        @endif

                                        @if(Auth::user()->can('access.skills.delete'))
                                            <form method="POST" action="{{ url('/admin/skills'.'/'.$item->id) }}" accept-charset="UTF-8" style="display:inline" class = "confirm_delete">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-xs" title="Delete User"><i class="fa fa-trash-o" aria-hidden="true"> Delete</i></button>
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
