@extends('backend.theme.main')

@section('indexPage', true)
@section('indexPageTitle', 'Sosyal Medya Hesabını Düzenle')

@section('content')
    {!! Form::open([ 'route' => [ 'menu.edit', $get['id'] ], 'class' => 'kt-form kt-form--label-right']) !!}
        <div class="kt-portlet__body">
            @include('backend.theme.errors.form-validation')
            <div class="form-group row">
                <label class="col-lg-3 col-form-label">Adı:</label>
                <div class="col-lg-9">
                    {{ Form::text('name', $get['name'], [ 'class' => 'form-control']) }}
                </div>
            </div>
            <div class="form-group row">
                <label class="col-lg-3 col-form-label">Açıklaması:</label>
                <div class="col-lg-9">
                    {{ Form::text('description', $get['description'], [ 'class' => 'form-control']) }}
                </div>
            </div>
        </div>
        <div class="kt-portlet__foot">
            <div class="kt-form__actions">
                <div class="row">
                    <div class="col-3"></div>
                    <div class="col-9">
                        {!! Form::submit('Ekle', ['class' => 'btn btn-success']) !!}
                        <button type="reset" class="btn btn-secondary">Formu Sıfırla</button>
                    </div>
                </div>
            </div>
        </div>
    {!! Form::close() !!}
@endsection