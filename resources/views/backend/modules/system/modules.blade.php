<!--
    Name:Müşteriler
    Desc:aciklama

-->
@extends('backend.theme.main')

@section('indexPage', true)
@section('indexPageTitle', 'Sosyal Medya Hesapları')

@section('content')
<div class="kt-portlet__body">
    <table class="table table-bordered table-hover" id="kt_table_1">
        <thead>
            <tr>
                <th>Adı</th>
                <th>Durumu</th>
                <th>İşlem</th>
            </tr>
        </thead>
        <tbody>
            @foreach($all as $e)
                <tr>
                    <td>{{$e['name']}}</br><small>{{$e['desc']}}</small></td>
                    <td>{{$e['is_active']}}</td>
                    <td>
                        <a href="{{route('system.module.active', $e['id'])}}">Aktif Et</a>
                        <a href="{{route('system.module.deactive', $e['id'])}}">Pasif Yap</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

@section('datatable', true)

@section('pageJs')
    <script type="text/javascript">
        "use strict";
        var KTDatatablesDataSourceHtml = function() {

            var initTable1 = function() {
                var table = $('#kt_table_1');

                // begin first table
                table.DataTable({
                    language: {
                        "url": "https://cdn.datatables.net/plug-ins/1.10.20/i18n/Turkish.json"
                    },
                    columnDefs: [
                        { targets: [ -1 ], orderable: false}
                    ]
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