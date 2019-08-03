@extends('layouts.backend')

@section('title','Show Skill')

@section('content')
    <div class="row">

        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Sec Id # {{$sec_ids->name}}</div>
                <div class="panel-body">

                    <a href="{{ url('/admin/sec_ids') }}" title="Back">
                        <button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back
                        </button>
                    </a>

                    @if($sec_ids->id != 0)
                        @if(Auth::user()->can('access.sec_ids.edit'))
                            <a href="{{ url('/admin/sec_ids/' . $sec_ids->id . '/edit') }}" title="Edit Fee Schedules">
                                <button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o"
                                                                          aria-hidden="true"></i>
                                   Edit
                                </button>
                            </a>
                        @endif


                       

                            @if(Auth::user()->can('access.sec_ids.delete'))
                                {!! Form::open([
                                'method' => 'DELETE',
                                'url' => ['/admin/sec_ids', $sec_ids->id],
                                'style' => 'display:inline'
                            ]) !!}
                                {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                        'type' => 'submit',
                                        'class' => 'btn btn-danger btn-xs',
                                        'title' => 'Delete Fee Schedules',
                                        'onclick'=>"return confirm('Cofirm Delete?')"
                                ))!!}
                                {!! Form::close() !!}
                            @endif
                        
                    @endif


                    <div class="table-responsive">
                        <table class="table table-borderless">
                            <tbody>

                            <tr>

                                <td>Name</td>
                                <td> {{ $sec_ids->name or "N/A" }} </td>
                            </tr>
                            <tr>

                                <td>Description</td>
                                <td> {{ $sec_ids->description or "N/A" }} </td>
                            </tr>
                            
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection