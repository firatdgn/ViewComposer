<?php

namespace App\Http\Controllers\Modules;

use App\AttributeGroups;
use App\AttributeGroupsInfo;
use App\AttributeValues;
use App\AttributeValuesInfo;
use App\Currencies;
use App\ProductsToCategories;
use App\ShoppingCategories;
use App\ShoppingCategoriesInfo;
use App\ShoppingProducts;
use App\ShoppingProductsAttributes;
use App\ShoppingProductsImages;
use App\ShoppingProductsInfo;

class ShoppingController extends Controller
{
	public function index()
	{
		$data['all'] = ShoppingProducts::all();

		return view('backend.modules.shopping.index', $data);
	}

	public function create()
	{
		return view('backend.modules.socialmedia.create', $data);
	}

	public function store()
	{
		return redirect('Backend/SocialMedia');
	}
}