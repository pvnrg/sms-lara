@extends('layouts.backend')

@section('title','Edit Customer')
@section('pageTitle','Edit Customer')


@section('content')
    <div class="row">

        <div class="col-md-12">
            <div class="box bordered-box blue-border">
                <div class="box-header blue-background">
                                                  <div class="title">
                                                      <i class="icon-circle-blank"></i>
                                                      Edit Customer
                                                  </div>

                               </div>
                <div class="box-content ">
                    <a href="{{ url('/admin/customer') }}" title="Back">
                        <button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back
                        </button>
                    </a>

                    <a href="{{ url('/admin/customer/createoffer/' . $party->id ) }}" title="Create Offer">
                        <button class="btn btn-warning btn-xs">
                            Create Offer
                        </button>
                    </a>

                    <a href="{{ url('/admin/customer/addfolder/' . $party->id ) }}" title="Folder">
                        <button class="btn btn-warning btn-xs">
                            Folder
                        </button>
                    </a>

                    <a href="{{ url('/admin/job?customer_id='.$party->id ) }}" title="Jobs">
                        <button class="btn btn-warning btn-xs">
                            Jobs
                        </button>
                    </a>
                    
                    <br/>
                    <br/>

                    @if ($errors->any())
                        <ul class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif

                    {!! Form::model($party, [
                        'method' => 'PATCH',
                        'url' => ['/admin/customer', $party->id],
                        'class' => 'form-horizontal',
                        'id'=>'formParty',
                        'enctype'=>'multipart/form-data'
                    ]) !!}


                    @include ('admin.customer.form', ['submitButtonText' => 'Update'])

                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
@endsection
