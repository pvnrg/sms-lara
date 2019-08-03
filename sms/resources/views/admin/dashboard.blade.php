@extends('layouts.backend')


@section('title',trans('ticket.label.ticket'))

@push('css')
{{--<link href="https://cdn.datatables.net/buttons/1.4.2/css/buttons.dataTables.min.css" rel="stylesheet">--}}

<style>
    .link_file{
        color: #0000cc;
    }
</style>
@endpush

@section('content')

    <div class="box bordered-box blue-border">
        <div class="box-header blue-background">
            <div class="title">
                <i class="icon-circle-blank"></i>
                Users
            </div>
            <div class="actions">
                @include('partials.page_tooltip',['model' => 'user','page'=>'index'])
            </div>

        </div>
        <div class="panel-body">

            <div class="box box-collapsed">
                <div class="box-header">
                    <div class="title">
                        {{--  @if(Auth::user()->can('access.user.create'))  --}}
                            <a href="{{ url('/admin/users/create') }}" class="btn btn-success btn-sm"
                               title="Add New User">
                                <i class="fa fa-plus" aria-hidden="true"></i>Add New
                            </a>
                        {{--  @endif  --}}
                      
                    </div>
                    
                </div>
                
            </div>


        </div>
    </div>
    
@endsection



