<?php

	function getMediaWithHtml($key) {
		return '<img src="' . \App\Media::where('key', $key)->first()['link'] . '" title="' . getOnlyActiveLanguageValue(\App\Media::where('key', $key)->first()['description']) . '" />';
	}