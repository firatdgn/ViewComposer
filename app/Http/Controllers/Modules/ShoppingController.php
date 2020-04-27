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

	public function categories()
	{
		$data['all'] = ShoppingCategories::all();

		return view('backend.modules.shopping.categories', $data);
	}

	public function newCategory()
	{
		return view('backend.modules.shopping.newCategory');
	}

	public function storeCategory()
	{
		ShoppingCategories::create([
			'name' => serialize(request('name')),
			'short_description' => serialize(request('short_description')),
			'description' => serialize(request('description')),
			'seo_description' => serialize(request('seo_description')),
			'seo_keywords' => serialize(request('seo_keywords')),
		]);

		return redirect('Backend/Shopping/Categories');
	}

	public function editCategory($id)
	{
		$data['get'] = ShoppingCategories::find($id);

		return view('backend.modules.shopping.editCategory', $data);
	}

	public function updateCategory($id)
	{
		ShoppingCategories::find($id)->update([
			'name' => serialize(request('name')),
			'short_description' => serialize(request('short_description')),
			'description' => serialize(request('description')),
			'seo_description' => serialize(request('seo_description')),
			'seo_keywords' => serialize(request('seo_keywords')),
		]);

		return redirect('Backend/Shopping/Categories');
	}

	public function deleteCategory($id)
	{
		ShoppingCategories::find($id)->delete();

		return redirect('Backend/Shopping/Categories');
	}

	public function attributeGroups()
	{
		$data['all'] = AttributeGroups::all();

		return view('backend.modules.shopping.attributes', $data);
	}

	public function newAttributeGroups()
	{
		return view('backend.modules.shopping.newAttribute');
	}

	public function storeAttributeGroups()
	{
		AttributeGroups::create([
			'code' => serialize(request('code')),
			'name' => serialize(request('name'))
		]);

		return redirect('Backend/Shopping/AttributeGroups');
	}

	public function editAttributeGroups($id)
	{
		$data['get'] = AttributeGroups::find($id);

		return view('backend.modules.shopping.editAttribute', $data);
	}

	public function deleteAttributeGroup($id)
	{
		AttributeGroups::find($id)->delete();

		return redirect('Backend/Shopping/AttributeGroups');
	}

	public function newValueForAttributeGroup($id)
	{
		$data['get'] = AttributeGroups::find($id);

		return view('backend.modules.shopping.newValue', $data);
	}

	public function storeValueForAttributeGroup($id)
	{
		AttributeValues::create([
			'group_id' => request('group_id'),
			'name' => serialize(request('name'))
		]);

		return redirect('Backend/Shopping/AttributeGroup/Values');
	}

	public function values()
	{
		$data['all'] = AttributeValues::all();

		return view('backend.modules.shopping.values', $data);
	}

	public function editAttributeGroupValue($id)
	{
		$data['get'] = AttributeValues::find($id);

		return view('backend.modules.shopping.editValue', $data);
	}

	public function updateAttributeGroupValue($id)
	{
		AttributeValues::find($id)->update([
			'name' => serialize(request('name'))
		]);

		return redirect('Backend/Shopping/AttributeGroup/Values');
	}

	public function deleteAttributeGroupValue($id)
	{
		AttributeValues::find($id)->delete();

		return redirect('Backend/Shopping/AttributeGroup/Values');
	}

	public function products()
	{
		$data['all'] = ShoppingProducts::all();

		return view('backend.modules.shopping.products', $data);
	}

	public function newProduct()
	{
		return view('backend.modules.shopping.newProduct');
	}

	public function storeProduct()
	{
		ShoppingProducts::create([
			'name' => serialize(request('name')),
			'short_description' => serialize(request('short_description')),
			'description' => serialize(request('description')),
			'seo_description' => serialize(request('seo_description')),
			'seo_keywords' => serialize(request('seo_keywords')),
			'price' => request('price'),
		]);

		return redirect('Backend/Shopping/Products');
	}

	public function editProduct($id)
	{
		$data['get'] = ShoppingProducts::find($id);

		return view('backend.modules.shopping.editProduct', $data);
	}

	public function updateProduct($id)
	{
		ShoppingProducts::find($id)->update([
			'name' => serialize(request('name')),
			'short_description' => serialize(request('short_description')),
			'description' => serialize(request('description')),
			'seo_description' => serialize(request('seo_description')),
			'seo_keywords' => serialize(request('seo_keywords')),
			'price' => request('price'),
		]);

		return redirect('Backend/Shopping/Products');
	}

	public function deleteProduct($id)
	{
		ShoppingProducts::find($id)->delete();

		return redirect('Backend/Shopping/Products');
	}

	public function defineAnAttribute($id)
	{
		foreach(AttributeGroups::all() as $e) {
			$data['attributes'][$e['id']] = getOnlyActiveLanguageValue($e['name']);
		}

		foreach(AttributeValues::all() as $e) {
			$data['values'][$e['id']] = getOnlyActiveLanguageValue($e['name']);
		}

		return view('backend.modules.shopping.defineAnAttribute', $data);
	}

	public function storeDefineAnAttribute($id)
	{
		ShoppingProductsAttributes::create([
			'product_id' => $id,
			'group_id' => request('group_id'),
			'value_id' => request('value_id'),
		]);

		return redirect('Backend/Shopping/Products');
	}
}