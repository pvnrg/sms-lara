@extends('layouts.backend')


@section('title','Show Skill')

@section('content')
    <div class="row">

        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Job Category # {{$jobcategory->name}}</div>
                <div class="panel-body">

                    <a href="{{ url('/admin/jobcategory') }}" title="Back">
                        <button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back
                        </button>
                    </a>

                    @if($jobcategory->id != 0)

                        @if(Auth::user()->can('access.jobcategory.edit'))
                            <a href="{{ url('/admin/jobcategory/' . $jobcategory->id . '/edit') }}" title="Edit Employee type">
                                <button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                   Edit
                                </button>
                            </a>
                        @endif

                        @if(Auth::user()->can('access.jobcategory.delete'))
                            {!! Form::open([
                            'method' => 'DELETE',
                            'url' => ['/admin/jobcategory', $jobcategory->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete Employee type',
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
                                <td>{{ $jobcategory->id }}</td>
                            </tr>
                            <tr>

                                <td>Name</td>
                                <td> {{ $jobcategory->name }} </td>
                            </tr>
                            
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection