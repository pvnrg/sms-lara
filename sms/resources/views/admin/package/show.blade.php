@extends('layouts.backend')

@section('title','View Package')


@section('content')
    <div class="row">

        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">View Package</div>
                <div class="panel-body">

                    <a href="{{ URL::previous() }}" title="Back">
                        <button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back
                        </button>
                    </a>
                    @if(Auth::user()->can('access.package.edit'))
                    <a href="{{ url('/admin/packages/' . $package->id . '/edit') }}" title="Edit Package">
                        <button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                            Edit Package
                        </button>
                    </a>
                    @endif
                    @if(Auth::user()->can('access.package.delete'))
                    {!! Form::open([
                        'method' => 'DELETE',
                        'url' => ['/admin/packages', $package->id],
                        'style' => 'display:inline'
                    ]) !!}
                    {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                            'type' => 'submit',
                            'class' => 'btn btn-danger btn-xs',
                            'title' => 'Delete Package',
                            'onclick'=>'return confirm("Confirm delete?")'
                    ))!!}
                    {!! Form::close() !!}
                    @endif
                    <br/>
                    <br/>


                    <div class="table-responsive">
                        <table class="table table-borderless">
                            <tbody>
                            <tr>
                                <td>Id</td>
                                <td>{{ $package->id }}</td>
                            </tr>
                            <tr>
                                <td>Title</td>
                                <td>{{ $package->title }}</td>
                            </tr>

                            <tr>
                                <td>Price</td>
                                <td>{{ $package->price }}</td>
                            </tr>
                            <tr>
                                <td>Total Kw</td>
                                <td>{{ $package->kw }}</td>
                            </tr>
                            @if( $package->display_kw)
                            <tr>
                                <td>Display Net Kw</td>
                                <td>{{ $package->display_kw }}</td>
                            </tr>
                            @endif
                            <tr>
                                <td>Number of Phase</td>
                                <td>{{ $package->number_of_phase }}</td>
                            </tr>
                            <tr>
                                <td>Chart JPEG</td>
                                <td>@if(isset($package) && isset($package->image))
                                        <img  src="{{url('/package/'.$package->id.'/'.$package->image)}}" width="125" height="100" />
                                        <a href="{{url('/package/'.$package->id.'/'.$package->image)}}" target="_blank" class="btn">View</a>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td>Package Image</td>
                                <td>@if(isset($package) && isset($package->package_image))
                                        {{-- <img  src="{{url('/package/'.$package->id.'/'.$package->package_image)}}" width="125" height="100" /> --}}
                                        <a href="{{url('/package/'.$package->id.'/'.$package->package_image)}}" target="_blank" >{{ $package->package_image }}</a>
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
@endsection