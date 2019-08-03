@extends('wizard.layout')

@section('wizard_content')

    <?php
    $submitButtonText = 'Next';
    ?>


    <h1>Company</h1>

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    {!! Form::model($company, [
                         'method' => 'POST',
                         'class' => 'form-horizontal',
                         'files' => true
                     ]) !!}

    {{--    {!! Form::open(['url' => '/admin/companies', 'class' => 'form-horizontal', 'files' => true]) !!}--}}

    @include ('admin.companies.form')

    {!! Form::close() !!}


@endsection