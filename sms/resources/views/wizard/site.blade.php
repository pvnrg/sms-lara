@extends('wizard.layout')

@section('wizard_content')
    <?php
    $submitButtonText = 'Next';

    ?>
    <h1>Site</h1>

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif


    {!! Form::model($site, [
                         'method' => 'POST',
                         'class' => 'form-horizontal',
                         'files' => true
                     ]) !!}

    {{--    {!! Form::open(['url' => '/admin/companies', 'class' => 'form-horizontal', 'files' => true]) !!}--}}

    @include ('wizard.forms.site')

    {!! Form::close() !!}


@endsection