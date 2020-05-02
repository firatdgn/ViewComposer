<?php

namespace App\Http\Controllers\Modules;

use App\Menus;
use App\MenuContent;

class MenusController extends Controller
{
	public function index()
	{
		$data['all'] = Menus::all();

		return view('backend.modules.menus.index', $data);
	}

	public function create()
	{
		return view('backend.modules.menus.create');
	}

	public function store()
	{
		Menus::create([
			'name' => request('name'),
			'description' => request('description')
		]);

		return redirect('Backend/Menus');
	}

	public function show($id)
	{
		$data['get'] = Menus::find($id);

		return view('backend.modules.menus.show', $data);
	}

	public function edit($id)
	{
		$data['get'] = Menus::find($id);

		return view('backend.modules.menus.edit', $data);
	}

	public function update($id)
	{
		$data = [
			'name' => request('name'),
			'description' => request('description')
		];

		Menus::find($id)->update($data);

		return redirect()->route('menus');
	}

	public function delete($id)
	{
		Menus::find($id)->delete();

		return redirect('Backend/Menus');
	}

	public function addItem($id)
	{
		$data['get'] = Menus::find($id);

		return view('backend.modules.menus.item.create', $data);
	}

	public function storeItem($id)
	{
		$data = [
			'menu_id' => $id,
			'name' => request('name'),
			'description' => request('description'),
			'sort' => request('sort'),
			'url' => request('url'),
			'icon' => request('icon'),
			'is_html' => request('is_html')
		];

		MenuContent::create($data);

		return redirect()->route('menus');
	}

	public function editItem($id)
	{
		$data['get'] = MenuContent::find($id);

		return view('backend.modules.menus.item.edit', $data);
	}

	public function updateItem($id)
	{
		$data = [
			'name' => request('name'),
			'description' => request('description'),
			'sort' => request('sort'),
			'url' => request('url'),
			'icon' => request('icon'),
			'is_html' => request('is_html')
		];

		MenuContent::find($id)->update($data);

		return redirect()->route('menus');
	}

	public function deleteItem($id)
	{
		MenuContent::find($id)->delete();

		return redirect()->route('menus');
	}
}