
<!-- begin:: Header Menu -->

<!-- Uncomment this to display the close button of the panel
<button class="kt-header-menu-wrapper-close" id="kt_header_menu_mobile_close_btn"><i class="la la-close"></i></button>
-->
@if($__env->yieldContent('topMenu'))
	<div class="kt-header-menu-wrapper" id="kt_header_menu_wrapper">
		<div id="kt_header_menu" class="kt-header-menu kt-header-menu-mobile  kt-header-menu--layout-default ">
			<!-- <ul class="kt-menu__nav "> -->
			@yield('topMenu')
		</div>
	</div>
@endif
<!-- end:: Header Menu -->