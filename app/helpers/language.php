<?php

	if(!function_exists('getActiveLanguage')) {
		function getActiveLanguage() {
			return session('activeLanguage', getFirstLanguage());
		}
	}

	if(!function_exists('getFirstLanguage')) {
		function getFirstLanguage() {
			return \App\Languages::where('is_active', 1)->orderBy('priority', 'desc')->first()['code'];
		}
	}

	if(!function_exists('changeLanguage')) {
		function changeLanguage($langaugeCode) {
			session()->put('activeLanguage', $langaugeCode);
		}
	}

	if(!function_exists('getTrans')) {
		function getTrans($key) {
			return getOnlyActiveLanguageValue(\App\Translations::where('key', $key)->first()['text']);
		}
	}

	if(!function_exists('getAllLanguages')) {
		function getAllLanguages() {
			$all = \App\Languages::where('is_active', '1')->get();
			$return = [];
			foreach($all as $e) $return[$e['code']] = $e['name'];

			return $return;
		}
	}

	if(!function_exists('explodeWithLanguages')) {
		function explodeWithLanguages($string) {
			
		}
	}

	if(!function_exists('getOnlyActiveLanguageValue')) {
		function getOnlyActiveLanguageValue($string) {
			return unserialize($string)[getActiveLanguage()];
		}
	}

	if(!function_exists('getThisLanguageValue')) {
		function getThisLanguageValue($language, $string) {
			return unserialize($string)[$language];
		}
	}