@extends('layouts.base')

@section('styles')
    @parent
    <link rel="stylesheet" type="text/css" href="lib/datatables/datatables.net-bs4/css/dataTables.bootstrap4.css"/>
@endsection

@section('menu')
    @include('partials.menus.superadmin', ['data' => [ ]])
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card card-table">
                <div class="card-header">Default
                    <div class="tools dropdown"><span class="icon mdi mdi-download"></span><a href="#" role="button"
                                                                                              data-toggle="dropdown"
                                                                                              class="dropdown-toggle"><span
                                    class="icon mdi mdi-more-vert"></span></a>
                        <div role="menu" class="dropdown-menu"><a href="#" class="dropdown-item">Action</a><a href="#"
                                                                                                              class="dropdown-item">Another
                                action</a><a href="#" class="dropdown-item">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">Separated link</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    {!! $dataTable->table() !!}
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')

    <script src="{{ asset('lib/datatables/datatables.net/js/jquery.dataTables.js') }}" type="text/javascript"></script>
    <script src="{{ asset('lib/datatables/datatables.net-bs4/js/dataTables.bootstrap4.js') }}"
            type="text/javascript"></script>


    {!! $dataTable->scripts() !!}


@endpush

