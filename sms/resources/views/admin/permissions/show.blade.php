@extends('layouts.backend')

@section('title','Show Permission')


@section('content')
    <div class="row">

        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Show Permission</div>
                <div class="panel-body">

                    <a href="{{ url('/admin/permissions') }}" title="Back">
                        <button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back
                        </button>
                    </a>


                    @if(Auth::user()->can('access.permission.edit'))
                        <a href="{{ url('/admin/permissions/' . $permission->id . '/edit') }}" title="Edit Permission">
                            <button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o"
                                                                      aria-hidden="true"></i>
                               Edit
                            </button>
                        </a>
                    @endif

                    @if(Auth::user()->can('access.permission.delete'))

                        {!! Form::open([
                            'method' => 'DELETE',
                            'url' => ['/admin/permissions', $permission->id],
                            'style' => 'display:inline'
                        ]) !!}
                        {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                'type' => 'submit',
                                'class' => 'btn btn-danger btn-xs',
                                'title' => 'Delete Permission',
                                'onclick'=>"return confirm('Cofirm Delete?')"
                        ))!!}
                        {!! Form::close() !!}
                    @endif
                    <br/>
                    <br/>

                    <div class="table-responsive">
                        <table class="table table-borderless">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Label</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>{{ $permission->id }}</td>
                                <td> {{ $permission->name }} </td>
                                <td> {{ $permission->label }} </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection