<?php


	if(!function_exists('getStatic')) {
		function getStatic($key)
		{
			return getOnlyActiveLanguageValue(\App\Statics::where('key', $key)->first()['value']);
		}
	}