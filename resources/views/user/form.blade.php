

@extends('layouts.base')

@section('styles')
    @parent

@endsection

@section('menu')
    @include('partials.menus.superadmin', ['data' => [ ]])
@endsection

@section('page_title')
    Create new user
@endsection

@section('breadcrumbs')
    <h2 class="page-head-title">Users</h2>
    <nav aria-label="breadcrumb" role="navigation">
        <ol class="breadcrumb page-head-nav">
            <li class="breadcrumb-item active"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item active"><a href="#">Users</a></li>
            <li class="breadcrumb-item active"><a href="{{ route('users.create') }}">New</a></li>
        </ol>
    </nav>
@endsection

@section('content')
    <div class="card card-border-color card-border-color-primary">
        <div class="card-header card-header-divider">Create a new user
            <span class="card-subtitle">
                All fields marked with an * are mandatory
            </span>
        </div>
        <div class="card-body">
            @if(session()->has('success'))
                <div role="alert" class="alert alert-success alert-dismissible">
                    <button type="button" data-dismiss="alert" aria-label="Close" class="close"><span aria-hidden="true" class="mdi mdi-close"></span></button>
                    <div class="icon"><span class="mdi mdi-check"></span></div>
                    <div class="message"><strong>Success</strong> {{session()->get('success')}}</div>
                </div>
            @endif

            @include('forms.user')
        </div>
    </div>

@endsection

@push('scripts')

    <script src="{{ asset('js/user/form.js') }}" type="text/javascript"></script>


@endpush

