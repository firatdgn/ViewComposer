@if(session('errors', false))
	<div class="form-group form-group-last">
		<div class="alert alert-secondary" role="alert">
			<div class="alert-icon"><i class="flaticon-warning kt-font-brand"></i></div>
		  	<div class="alert-text">
				<ul>
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
		</div>
	</div>
@endif