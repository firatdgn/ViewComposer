@extends('backend.theme.main')

@section('indexPage', true)
@section('indexPageTitle', 'Sosyal Medya Hesabını Düzenle')

@section('content')
    {!! Form::open([ 'route' => 'language.create', 'class' => 'kt-form kt-form--label-right']) !!}
        <div class="kt-portlet__body">
            @include('backend.theme.errors.form-validation')
            <div class="form-group row">
                <label class="col-lg-3 col-form-label">Adı:</label>
                <div class="col-lg-9">
                    {{ Form::text('name', null, [ 'class' => 'form-control']) }}
                </div>
            </div>
            <div class="form-group row">
                <label class="col-lg-3 col-form-label">Kodu:</label>
                <div class="col-lg-9">
                    {{ Form::text('code', null, [ 'class' => 'form-control']) }}
                </div>
            </div>
            <div class="form-group row">
                <label class="col-lg-3 col-form-label">Öncelik:</label>
                <div class="col-lg-9">
                    {{ Form::text('priority', null, [ 'class' => 'form-control']) }}
                </div>
            </div>
        </div>
        <div class="kt-portlet__foot">
            <div class="kt-form__actions">
                <div class="row">
                    <div class="col-3"></div>
                    <div class="col-9">
                        {!! Form::submit('Güncelle', ['class' => 'btn btn-success']) !!}
                        <button type="reset" class="btn btn-secondary">Formu Sıfırla</button>
                    </div>
                </div>
            </div>
        </div>
    {!! Form::close() !!}
@endsection