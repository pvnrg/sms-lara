@extends('layouts.backend')

@section('content')
        <div class="row">
            <div class="col-md-12">
              <div class="box bordered-box blue-border">
                      <div class="box-header blue-background">
                          <div class="title">
                              <i class="icon-circle-blank"></i>
                              Create New Job  @if(isset($customer_id)) #{{$customer->first_name}} @else  @endif
                          </div>

                      </div>
                      <div class="box-content ">




                        <a href="{{ url('/admin/job') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif



                        {!! Form::open(['url' => '/admin/job', 'class' => 'form-horizontal', 'files' => true]) !!}

                        @include ('admin.job.form')

                        {!! Form::close() !!}




                    </div>
                </div>
            </div>
        </div>
@endsection


