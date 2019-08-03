@extends('layouts.backend')


@section('title','Show Fee Schedules')

@section('content')
    <div class="row">

        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Fee Schedules # {{$fee_schedules->name}}</div>
                <div class="panel-body">

                    <a href="{{ url('/admin/fee_schedules') }}" title="Back">
                        <button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back
                        </button>
                    </a>

                    @if($fee_schedules->id != 0)
                        @if(Auth::user()->can('access.fee_schedules.edit'))
                            <a href="{{ url('/admin/fee_schedules/' . $fee_schedules->id . '/edit') }}" title="Edit Fee Schedules">
                                <button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o"
                                                                          aria-hidden="true"></i>
                                   Edit
                                </button>
                            </a>
                        @endif


                       

                            @if(Auth::user()->can('access.fee_schedules.delete'))
                                {!! Form::open([
                                'method' => 'DELETE',
                                'url' => ['/admin/fee_schedules', $fee_schedules->id],
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
                                <td> {{ $fee_schedules->name or "N/A" }} </td>
                            </tr>
                            <tr>

                                <td>Description</td>
                                <td> {{ $fee_schedules->description or "N/A" }} </td>
                            </tr>
                            
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection