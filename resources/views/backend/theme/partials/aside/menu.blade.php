
<!-- begin:: Aside Menu -->
<div class="kt-aside-menu-wrapper kt-grid__item kt-grid__item--fluid" id="kt_aside_menu_wrapper">
	<div id="kt_aside_menu" class="kt-aside-menu " data-ktmenu-vertical="1" data-ktmenu-scroll="1" data-ktmenu-dropdown-timeout="500">
		<ul class="kt-menu__nav ">
			<li class="kt-menu__item  kt-menu__item--active" aria-haspopup="true"><a href="index.html" class="kt-menu__link "><span class="kt-menu__link-text">Dashboard</span></a></li>
			<li class="kt-menu__section ">
				<h4 class="kt-menu__section-text">Modüller</h4>
				<i class="kt-menu__section-icon flaticon-more-v2"></i>
			</li>
			@foreach($menuModules as $name => $url)
				<li class="kt-menu__item">
					<a href="{{url($url)}}" class="kt-menu__link">
						<span class="kt-menu__link-text">{{$name}}</span>
					</a>
				</li>
			@endforeach
		</ul>
	</div>
</div>

<!-- end:: Aside Menu -->