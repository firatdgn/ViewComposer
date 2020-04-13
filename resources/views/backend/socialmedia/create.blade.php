<!--
    Name:Sosyal Medya Ekle
    Desc:aciklama

-->

@extends('theme.main')

@section('content')
<div class="kt-portlet">
    <div class="kt-portlet__head">
        <div class="kt-portlet__head-label">
            <h3 class="kt-portlet__head-title">
				Sosyal Medya Ekle
			</h3>
        </div>
        <div class="kt-portlet__head-toolbar">
			<div class="kt-portlet__head-wrapper">
				<div class="kt-portlet__head-actions">
					<div class="dropdown dropdown-inline">
						<button style="width: 90px" type="reset" class="btn btn-warning btn-icon"><i class="fa fa-reply"></i> Geri</button>
					</div>
				</div>
			</div>
		</div>
    </div>

    <!--begin::Form-->
    <form class="kt-form kt-form--label-right">
        <div class="kt-portlet__body">
            <div class="form-group">
                <label>Link</label>
                <input type="text" name="hesap_banka" placeholder="Link Giriniz" class="form-control">
            </div>
            <div class="form-group">
                <label>İkon</label>
                <select name="urun_kategori" class="form-control m-b">
                    <option value="4">Sınırsız Ürün Kategorisi 1</option>
                    <option value="5">Sınırsız Ürün Kategorisi 2</option>
                    <option value="6">Sınırsız Ürün Kategorisi 3</option>
                </select>
            </div>

        </div>
        <div class="kt-portlet__foot">
            <div class="kt-form__actions">
                <div class="row">
                    <div class="col-2">
                    </div>
                    <div class="col-10">
                        <button type="reset" class="btn btn-success">Kaydet</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

@endsection
@section('pageJs')


@endsection
				