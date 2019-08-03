@extends('layouts.backend')

@section('title',trans('user.label.show_user'))


@section('content')

 <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#people">User  # {{$user->name}}</a></li>
        
    </ul>

    <div class="tab-content">
        <div id="people" class="tab-pane fade in active">
            <div class="row">
                <div class="col-md-12">
                    <div class="box bordered-box blue-border">
                        
                        <a href="{{ url('/admin/users') }}" title="Back">
                        <button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i>  Back
                        </button>
                    </a>
                    @if($user->id != 1)
                    @if(Auth::user()->can('access.user.edit'))
                    <a href="{{ url('/admin/users/' . $user->id . '/edit') }}" title="Edit User">
                        <button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                           edit
                        </button>
                    </a>
                    @endif

                    @if(Auth::user()->can('access.user.delete'))
                    {!! Form::open([
                        'method' => 'DELETE',
                        'url' => ['/admin/users', $user->id],
                        'style' => 'display:inline'
                    ]) !!}
                    {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                            'type' => 'submit',
                            'class' => 'btn btn-danger btn-xs',
                            'title' => 'Delete User',
                            'onclick'=>"return confirm('Confirm delete?')"
                    ))!!}
                    {!! Form::close() !!}
                    @endif
                    @endif
                    <br/>
                    <br/>

                    
                    <?php
                    $role = join(' + ', $user->roles()->pluck('label')->toArray());
                    ?>
                    
                    
                        <div class="box-content ">
                        <div class="table-responsive">
                            <table class="table table-borderless">
                            <tbody>

                            <tr>
                                <td> Name </td>
                                <td>{{ $user->name }}</td>
                            </tr>
                            
                            <tr>
                                <td> Email </td>
                                <td>{{ $user->email }}</td>
                            </tr>

                            <tr>
                                <td>Role </td>
                                <td>{{ $role }}</td>
                            </tr>

                            <tr>
                                <td>Phone # </td>
                                <td>{{ $user->contact or 'N/A' }}</td>
                            </tr>

                            <tr>
                                <td>Profile Image </td>
                                <td>
                                    @if(isset($user) && isset($user->profile_image))
                                        @if( file_exists(public_path('/user/'.$user->profile_image) )  )
                                        <img  src="{{url('/user/'.$user->profile_image)}}" width="125" height="100" alt="{{ $user->profile_image }}"/>  
                                        @endif
                                    @else
                                        N/A        
                                    @endif
                                </td>
                            </tr>
                            </tbody>
                        </table>                 
                        </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </div>                 



@endsection



