<!--
	Name:Tema dosyası
	Desc:Tema Dosyası
-->
<!-- begin:: Aside Menu -->
<div class="kt-aside-menu-wrapper kt-grid__item kt-grid__item--fluid" id="kt_aside_menu_wrapper">
	<div id="kt_aside_menu" class="kt-aside-menu " data-ktmenu-vertical="1" data-ktmenu-scroll="1" data-ktmenu-dropdown-timeout="500">
		<ul class="kt-menu__nav ">
			<li class="kt-menu__item  ">
				<a href="{!! url('/') !!}" class="kt-menu__link ">
					<span class="kt-menu__link-icon">
						<i class="fa flaticon-dashboard"></i>
					</span>
					<span class="kt-menu__link-text">Gösterge Paneli</span>
				</a>
			</li>
			@foreach($menuModules as $name => $url)
			<li class="kt-menu__item  ">
				<a href="{!! url($url) !!}" class="kt-menu__link kt-menu__toggle">
					<span class="kt-menu__link-icon">
						<i class="fa fa-plus"></i>
					</span>
					<span class="kt-menu__link-text">{{ $name }}</span>
				</a>
			</li>
			@endforeach
		</ul>
	</div>
</div>
<!-- end:: Aside Menu -->