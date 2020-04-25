@extends('backend.theme.main')

@section('content')
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        <div class="kt-portlet kt-portlet--mobile">
            <div class="kt-portlet__head kt-portlet__head--lg">
                <div class="kt-portlet__head-label">
                    <span class="kt-portlet__head-icon">
                        <i class="kt-font-brand la la-car"></i>
                    </span>
                    <h3 class="kt-portlet__head-title">
                        Sosyal Medya Hesapları
                    </h3>
                </div>
                <div class="kt-portlet__head-toolbar">
                    <div class="kt-portlet__head-wrapper">
                        <div class="kt-portlet__head-actions">
                            <a href="{!! url('User/Create') !!}" class="btn btn-brand btn-elevate btn-icon-sm">
                                <i class="la la-plus"></i>
                                Yeni Hesap
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="kt-portlet__body">

                <!--begin: Datatable -->
                <table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
                    <thead>
                        <tr>
                            <th> İsim </th>
                            <th> İkon </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($modules as $e)
                            <tr>
                                <td>{!! $e['name'] !!}</td>
                                <td><a href="{{ url('Backend/Module/'. $e['id'] . '/Active') }}"> aktif et</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <!--end: Datatable -->
            </div>
        </div>
    </div>
@endsection

@section('title', 'Sosyal Medya Hesapları')

@section('pageCss')
<link href="{!! asset('plugins/custom/datatables/datatables.bundle.css') !!}" rel="stylesheet" type="text/css" />
@endsection

@section('pageJs')
<script src="{!! asset('plugins/custom/datatables/datatables.bundle.js') !!}" type="text/javascript"></script>
<script type="text/javascript">
"use strict";
var KTDatatablesDataSourceHtml = function() {

    var initTable1 = function() {
        var table = $('#kt_table_1');

        // begin first table
        table.DataTable({
            responsive: false
        });

    };

    return {

        //main function to initiate the module
        init: function() {
            initTable1();
        },

    };

}();

jQuery(document).ready(function() {
    KTDatatablesDataSourceHtml.init();
});
</script>
@endsection