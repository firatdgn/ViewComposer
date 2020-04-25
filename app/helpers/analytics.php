<?php


	if(!function_exists('getGoogleApprove')) {
		function getGoogleApprove() {
			return \App\Analytics::where('key', 'googleOnay')->first()['value'];
		}
	}

	if(!function_exists('getGoogleAnalytic')) {
		function getGoogleAnalytic() {
			return \App\Analytics::where('key', 'googleAnalytic')->first()['value'];
		}
	}

	if(!function_exists('getYandexApprove')) {
		function getYandexApprove() {
			return \App\Analytics::where('key', 'yandexOnay')->first()['value'];
		}
	}

	if(!function_exists('getYandexAnalytic')) {
		function getYandexAnalytic() {
			return \App\Analytics::where('key', 'yandexAnalytic')->first()['value'];
		}
	}
