<?php

	function getProduct($id) {
		return \App\ShoppingProducts::find($id);
	}

	function getProductName($id) {
		return getOnlyActiveLanguageValue(getProduct($id)['name']);
	}