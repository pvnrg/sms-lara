@extends('layouts.backend')

@section('title','Settings')
@section('pageTitle','Settings')

@section('content')
    <div class="row">

        <div class="col-md-12">
            <div class="box bordered-box blue-border">
                <div class="box-header blue-background">
                    <div class="title">
                        <i class="icon-circle-blank"></i>
                        Settings
                    </div>

                </div>
                <div class="box-content ">
                    <div class="row">
                        <div class="col-md-6">
                        </div>

                        <div class="col-md-6">
                            {!! Form::open(['method' => 'GET', 'url' => '/admin/settings', 'class' => 'navbar-form navbar-right', 'role' => 'search'])  !!}
                            <input type="search" class="form-control search" name="search" placeholder="{{Request::get('search')}}" value="{!! request()->get('search') !!}">
                            
                            {!! Form::close() !!}
                            </div>
                        </div>
                    


                    <div class="table-responsive">
                        <table class="table table-borderless" id="products-table">
                            <thead>
                            <tr>
                                <th>Id</th>                         
                                <th>Name</th>
                                <th>Value</th>
                                <th>Actions</th>                        
                            </tr>
                            </thead>
                            <tbody>
                                    @foreach($settings as $item)
                                    
                                    <tr>
                                        <td> {{$item->id}}</td>
                                        <td> {{str_replace("_", " ", $item->name) }}</td>
                                        <td> @if($item->name == "Signature") <a target="_blank" href="{{url('/img/'.$item->value)}}">{{$item->value}}</a>  @else {{$item->value}} @endif</td>
                                        <td>
                                            @if(Auth::user()->can('access.setting.edit'))
                                                <a href="{{ url('/admin/settings/' . $item->id . '/edit') }}"
                                                    title="Edit Settings">
                                                    <button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                                                    </button>
                                                </a>
                                            @endif
                                            @if(Auth::user()->can('access.setting.delete'))
                                                {!! Form::open([
                                                    'method' => 'DELETE',
                                                    'url' => ['/admin/settings', $item->id],
                                                    'style' => 'display:inline'
                                                ]) !!}
                                                {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Delete Setting',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                                {!! Form::close() !!}
                                            @endif
    
                                        </td>
                                    </tr>   
                                    @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="pagination-wrapper"> {!! $settings->appends(['search' => Request::get('search')])->render() !!} </div>
                </div>
            </div>
        </div>
    </div>
@endsection

