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
                            <th> Kullanıcı Adı & Link </th>
                            <th> İşlemler </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($all as $e)
                            <tr>
                                <td>{!! $e['name'] !!}</td>
                                <td>{!! $e['email'] !!}</td>
                                <td>{!! $e['phone'] !!}</td>
                                <td>{!! $e->projects->count() !!}</td>
                                <td nowrap width="5%">
                                    <span class="dropdown">
                                        <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="true">
                                          <i class="la la-ellipsis-h"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">

                                            <a class="dropdown-item" href="{!! url('User/' . $e['id']) !!}"><i class="la la-tv"></i> İncele</a>
                                            <a class="dropdown-item" href="{!! url('User/' . $e['id'] . '/AddConnection') !!}"><i class="la la-tv"></i> Erişim ver</a>
                                            <a class="dropdown-item" href="{!! url('User/' . $e['id'] . '/ConnectRole') !!}"><i class="la la-tv"></i> Rol tanımla</a>
                                            <a class="dropdown-item" href="{!! url('User/' . $e['id'] . '/Edit') !!}"><i class="la la-edit"></i> Düzenle</a>
                                            <a class="dropdown-item" data-toggle="modal" data-target="#kt_modal_{!! $e['id'] !!}"><i class="la la-trash"></i>Sil</a>
                                        </div>
                                    </span>
                                </td>
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