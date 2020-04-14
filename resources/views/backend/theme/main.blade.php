<!DOCTYPE html>
<html lang="en">

	<!-- begin::Head -->
	<head>
		<base href="">
		<meta charset="utf-8" />
		<title>@yield('title', 'Kobiyim')</title>
		<meta name="description" content="Updates and statistics">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!--begin::Fonts -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">

		<!--end::Fonts -->

		<!--begin::Page Vendors Styles(used by this page) -->
		@if($__env->yieldContent('datatable'))
			<link href="{!! asset('plugins/custom/datatables/datatables.bundle.css') !!}" rel="stylesheet" type="text/css" />
		@endif
		<!--end::Page Vendors Styles -->

		<!--begin::Global Theme Styles(used by all pages) -->
		<link href="{!! asset('plugins/global/plugins.bundle.css') !!}" rel="stylesheet" type="text/css" />
		<link href="{!! asset('css/style.bundle.css') !!}" rel="stylesheet" type="text/css" />

		<!--end::Global Theme Styles -->

		<!--begin::Layout Skins(used by all pages) -->
		<link href="{!! asset('css/skins/header/base/light.css') !!}" rel="stylesheet" type="text/css" />
		<link href="{!! asset('css/skins/header/menu/light.css') !!}" rel="stylesheet" type="text/css" />
		<link href="{!! asset('css/skins/brand/light.css') !!}" rel="stylesheet" type="text/css" />
		<link href="{!! asset('css/skins/aside/light.css') !!}" rel="stylesheet" type="text/css" />

		<!--end::Layout Skins -->

		@yield('pageCss')

		<link rel="shortcut icon" href="{!! asset('media/logos/favicon.ico') !!}" />
	</head>

	<!-- end::Head -->

	<!-- begin::Body -->
	<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--static kt-subheader--enabled kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">

		@include('theme.layout')

		<!-- begin::Global Config(global config for global JS sciprts) -->
		<script>
			var KTAppOptions = {
				"colors": {
					"state": {
						"brand": "#5d78ff",
						"dark": "#282a3c",
						"light": "#ffffff",
						"primary": "#5867dd",
						"success": "#34bfa3",
						"info": "#36a3f7",
						"warning": "#ffb822",
						"danger": "#fd3995"
					},
					"base": {
						"label": [
							"#c5cbe3",
							"#a1a8c3",
							"#3d4465",
							"#3e4466"
						],
						"shape": [
							"#f0f3ff",
							"#d9dffa",
							"#afb4d4",
							"#646c9a"
						]
					}
				}
			};
		</script>

		<!-- end::Global Config -->

		<!--begin::Global Theme Bundle(used by all pages) -->
		<script src="{!! asset('plugins/global/plugins.bundle.js') !!}" type="text/javascript"></script>
		<script src="{!! asset('js/scripts.bundle.js') !!}" type="text/javascript"></script>

		<!--end::Global Theme Bundle -->

		<!--begin::Page Vendors(used by this page) -->
		@if($__env->yieldContent('datatable'))
			<script src="{!! asset('plugins/custom/datatables/datatables.bundle.js') !!}" type="text/javascript"></script>
		@endif
		<!--end::Page Vendors -->

		<!--begin::Page Scripts(used by this page) -->
		@yield('pageJs')
		<!--end::Page Scripts -->
	</body>

	<!-- end::Body -->
</html>