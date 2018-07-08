

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
            <li class="breadcrumb-item active"><a href="{{ route('users.new') }}">New</a></li>
        </ol>
    </nav>
@endsection

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card card-border-color card-border-color-primary">
                <div class="card-header card-header-divider">
                    New User
                    <span class="card-subtitle">Please fill all fields marked as required</span></div>
                <div class="card-body">
                    @include('partials.forms.user')
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')




@endpush

