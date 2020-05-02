<!--
	Name:Tema dosyası
	Desc:Tema Dosyası
-->
<!-- begin:: Header Topbar -->
<div class="kt-header__topbar">

	<!--begin: User Bar -->
	<div class="kt-header__topbar-item kt-header__topbar-item--user">
		<div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="0px,0px">
			<div class="kt-header__topbar-user">
				<span class="kt-header__topbar-welcome kt-hidden-mobile">Merhaba,</span>
				<span class="kt-header__topbar-username kt-hidden-mobile">{{ ucfirst('asd') }}</span>
				<img class="kt-hidden" alt="Pic" src="{!! asset('media/users/300_25.jpg') !!}" />

				<!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->
				<span class="kt-badge kt-badge--username kt-badge--unified-success kt-badge--lg kt-badge--rounded kt-badge--bold">deneeeeee</span>
			</div>
		</div>
		<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-top-unround dropdown-menu-xl">

			<!--begin: Head -->
			<div class="kt-user-card kt-user-card--skin-dark kt-notification-item-padding-x" style="background-image: url({!! asset('media/misc/bg-1.jpg') !!})">
				<div class="kt-user-card__avatar">
					<img class="kt-hidden" alt="Pic" src="{!! asset('media/users/300_25.jpg') !!}" />

					<!--use below badge element instead the user avatar to display username's first letter(remove  class to display it) -->
					<span class="kt-badge kt-badge--lg kt-hidden kt-badge--rounded kt-badge--bold kt-font-success">YO</span>
				</div>
				<div class="kt-user-card__name">
					denemeeee
				</div>
			</div>

			<!--end: Head -->

			<!--begin: Navigation -->
			<div class="kt-notification">
				<a href="{{ url('Profile') }}" class="kt-notification__item">
					<div class="kt-notification__item-icon">
						<i class="flaticon-profile-1"></i>
					</div>
					<div class="kt-notification__item-details">
						<div class="kt-notification__item-title kt-font-bold">
							Hesabım
						</div>
						<div class="kt-notification__item-time">
							Hesap bilgileriniz
						</div>
					</div>
				</a>
				<div class="kt-notification__custom kt-space-between">
					<a href="{!! url('Logout') !!}" class="btn btn-label btn-label-brand btn-sm btn-bold">Çıkış</a>
				</div>
			</div>

			<!--end: Navigation -->
		</div>
	</div>

	<!--end: User Bar -->
</div>

<!-- end:: Header Topbar -->