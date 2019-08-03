@extends('layouts.backend')


@section('title','Show Skill')

@section('content')
    <div class="row">

        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Skill # {{$skills->name}}</div>
                <div class="panel-body">

                    <a href="{{ url('/admin/skills') }}" title="Back">
                        <button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back
                        </button>
                    </a>

                    @if($skills->id != 0)
                        @if(Auth::user()->can('access.skills.edit'))
                            <a href="{{ url('/admin/skills/' . $skills->id . '/edit') }}" title="Edit Skill">
                                <button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o"
                                                                          aria-hidden="true"></i>
                                   Edit
                                </button>
                            </a>
                        @endif


                       

                            @if(Auth::user()->can('access.skills.delete'))
                                {!! Form::open([
                                'method' => 'DELETE',
                                'url' => ['/admin/skills', $skills->id],
                                'style' => 'display:inline'
                            ]) !!}
                                {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                        'type' => 'submit',
                                        'class' => 'btn btn-danger btn-xs',
                                        'title' => 'Delete Skill',
                                        'onclick'=>"return confirm('Cofirm Delete?')"
                                ))!!}
                                {!! Form::close() !!}
                            @endif
                        
                    @endif


                    <div class="table-responsive">
                        <table class="table table-borderless">
                            <tbody>

                            <tr>
                                <td>Id</td>
                                <td>{{ $skills->id }}</td>
                            </tr>
                            <tr>

                                <td>Name</td>
                                <td> {{ $skills->name }} </td>
                            </tr>
                            
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection