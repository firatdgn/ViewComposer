@extends('backend.theme.main')

@section('indexPage', true)
@section('indexPageTitle', 'Sosyal Medya Hesabı Oluştur')

@section('content')
    {!! Form::open([ 'route' => [ 'static.create' ], 'class' => 'kt-form kt-form--label-right']) !!}
        <div class="kt-portlet__body">
            @include('backend.theme.errors.form-validation')
            <div class="form-group row">
                <label class="col-lg-3 col-form-label">Sabit Anahtarı:</label>
                <div class="col-lg-9">
                    {{ Form::text('key', null, [ 'class' => 'form-control']) }}
                </div>
            </div>
            @foreach(getAllLanguages() as $code => $name)
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label">{{$name}} Değeri:</label>
                    <div class="col-lg-9">
                        {{ Form::text('value[' . $code . ']', null, [ 'class' => 'form-control']) }}
                    </div>
                </div>
            @endforeach
            <div class="form-group row">
                <label class="col-lg-3 col-form-label">HTML mi?:</label>
                <div class="col-lg-9">
                    {{ Form::select('is_html', [ '1' => 'Değil', '2' => 'HTML' ], null, [ 'class' => 'form-control']) }}
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