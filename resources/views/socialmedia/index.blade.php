<!--
    Name: Sosyal Medya Yönetimi
    Desc:aciklama

-->

@extends('theme.main')

@section('content')
	<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        <div class="kt-portlet kt-portlet--mobile">
            <div class="kt-portlet__head kt-portlet__head--lg">
                <div class="kt-portlet__head-label">

                    <h3 class="kt-portlet__head-title">
						Sosyal Medya Yönetimi
					</h3>
                </div>
                <div class="kt-portlet__head-toolbar">
                    <div class="kt-portlet__head-wrapper">
                        <div class="kt-portlet__head-actions">

                            <div class="dropdown dropdown-inline">
                                <button type="button" class="btn btn-primary btn-icon-sm ">
                                    <i class="la la-plus"></i> Sosyal Medya Ekle
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <br>
            <div class="row align-items-center">
                <div class="col-md-4 kt-margin-b-20-tablet-and-mobile">
                    <div class="kt-input-icon kt-input-icon--left">
                    </div>
                </div>
                <div class="col-md-4 kt-margin-b-20-tablet-and-mobile">
                    <div class="kt-form__group kt-form__group--inline">

                    </div>
                </div>
                <div class="col-md-4 kt-margin-b-20-tablet-and-mobile">
                    <div class="kt-form__group kt-form__group--inline">

                        <div class="col-md-11 kt-margin-b-20-tablet-and-mobile">
                            <div class="kt-input-icon kt-input-icon--left">
                                <input type="text" class="form-control" placeholder="Arayın..." id="generalSearch">
                                <span class="kt-input-icon__icon kt-input-icon__icon--left">
																<span><i class="la la-search"></i></span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="kt-portlet__body">
                <table class="table table-striped- table-bordered table-hover table-checkable" id="">
                    <thead>
                        <tr>
                            <th class="text-left" style="width:100px">
                                <strong>İkon</strong>
                            </th>
                            <th class="text-left">
                                <strong>Link</strong>
                            </th>
                            <th class="text-center" style="width: 120px">
                                <strong>İşlemler</strong>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>123</td>
                            <td> </td>

                            <td class="text-center">
                                <button type="button" class="btn btn-sm btn-success ">
                                    <i class="fa fa-edit"></i>
                                </button>
                                <button type="button" class="btn btn-sm btn-danger ">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>123</td>
                            <td> </td>

                            <td class="text-center">
                                <button type="button" class="btn btn-sm btn-success align-items-center">
                                    <i class="fa fa-edit"></i>
                                </button>
                                <button type="button" class="btn btn-sm btn-danger ">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>
@endsection
@section('pageJs')

<script src="{!! asset('js/pages/crud/metronic-datatable/base/data-local.js') !!}" type="text/javascript"></script>
@endsection
				