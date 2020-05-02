<!--
    Name:Müşteriler
    Desc:aciklama

-->
@extends('backend.theme.main')

@section('indexPage', true)
@section('indexPageTitle', 'Analiz Hesapları')

@section('content')
	{!! Form::open([ 'route' => [ 'analytic.edit', $get['id'] ], 'class' => 'kt-form kt-form--label-right']) !!}
		<div class="kt-portlet__body">
			@include('backend.theme.errors.form-validation')
			<div class="form-group row">
				<label class="col-lg-3 col-form-label">{{ $get['name'] }}:</label>
				<div class="col-lg-9">
					{{ Form::textarea('value', $get['value'], [ 'class' => 'form-control']) }}
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