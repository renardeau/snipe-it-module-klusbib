{{--@extends('klusbib::layouts.master')--}}
@extends('layouts/default')

{{-- Page title --}}
@section('title')
    {{ trans('klusbib::general.name') }}
    @parent
@stop

@section('content')
    <p>
        This view is loaded from module: {!! config('klusbib.name') !!}
    <table
            data-advanced-search="true"
            data-click-to-select="true"
            data-columns="{{ \Modules\Klusbib\Presenters\ToolPresenter::dataTableLayout() }}"
            data-cookie-id-table="assetsListingTable"
            data-pagination="true"
            data-id-table="assetsListingTable"
            data-search="true"
            {{--data-side-pagination="server"--}}
            data-side-pagination="client"
            data-show-columns="true"
            data-show-export="true"
            data-show-footer="true"
            data-show-refresh="true"
            data-sort-order="asc"
            data-sort-name="name"
            data-toolbar="#toolbar"
            id="assetsListingTable"
            class="table table-striped snipe-table"
            {{--data-url="Modules/Klusbib/data.json"--}}
            data-url="http://klusbibapi/tools"
            data-export-options='{
                "fileName": "export{{ (Input::has('status')) ? '-'.str_slug(Input::get('status')) : '' }}-assets-{{ date('Y-m-d') }}",
                "ignoreColumn": ["actions","image","change","checkbox","checkincheckout","icon"]
                }'>
    </table>
    </p>
@stop

@section('moar_scripts')
    @include('partials.bootstrap-table')

@stop
