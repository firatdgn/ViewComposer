
<!-- begin:: Page -->

@include('theme.partials.header.mobile')

<div class="kt-grid kt-grid--hor kt-grid--root">
	<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">

		@include('theme.partials.aside')

		<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">

			@include('theme.partials.header')

			<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

				@include('theme.partials.subheader')

				@yield('content')
			</div>

			@include('theme.partials.footer')
		</div>
	</div>
</div>

<!-- end:: Page -->

@include('theme.partials.scrolltop')