
<!-- begin:: Page -->

@include('backend.theme.partials.header.mobile')

<div class="kt-grid kt-grid--hor kt-grid--root">
	<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">

		@include('backend.theme.partials.aside')

		<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">

			@include('backend.theme.partials.header')

			<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

				@include('backend.theme.partials.subheader')

					@if($__env->yieldContent('indexPage'))
					<div class="kt-container kt-container--fluid kt-grid__item kt-grid__item--fluid" style="margin-top: 10px;">
						<div class="row">
							<div class="col-lg-12">
								<div class="kt-portlet kt-portlet--mobile">
									<div class="kt-portlet__head kt-portlet__head--lg">
										<div class="kt-portlet__head-label">
											<span class="kt-portlet__head-icon">
												<i class="kt-font-brand fa fa-handshake"></i>
											</span>
											<h3 class="kt-portlet__head-title"> @yield('indexPageTitle') </h3>
										</div>
										<div class="kt-portlet__head-toolbar">
											<div class="kt-portlet__head-wrapper">
												<div class="kt-portlet__head-actions">
													<a href="{!! url('Company/NewActivity') !!}" class="btn btn-success btn-icon-sm">Yeni Cari Hareket</a>
													<a href="{!! url('Company/Create') !!}" class="btn btn-success btn-icon-sm">Yeni</a>
												</div>	
											</div>
										</div>
									</div>
					@endif
					
					@yield('content')

					@if($__env->yieldContent('indexPage'))
								</div>
							</div>
						</div>
					</div>
					@endif

			</div>

			@include('backend.theme.partials.footer')
		</div>
	</div>
</div>

<!-- end:: Page -->

@include('backend.theme.partials.scrolltop')