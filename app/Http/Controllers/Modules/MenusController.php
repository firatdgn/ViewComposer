<?php

namespace App\Http\Controllers\Modules;

use App\Menus;

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
			'icon' => request('icon'),
			'value' => request('value')
		]);

		return redirect('Backend/Menus');
	}

	public function edit($id)
	{
		$data['get'] = Menus::find($id);

		return view('backend.modules.menus.edit', $data);
	}

	public function update($id)
	{
		Menus::find($id)->update([
			'name' => request('name'),
			'icon' => request('icon'),
			'value' => request('value')
		]);

		return redirect('Backend/Menus');
	}

	public function delete($id)
	{
		Menus::find($id)->delete();

		return redirect('Backend/Menus');
	}

	public function addItem($id)
	{

	}

	public function storeItem($id)
	{

	}

	public function editItem($id)
	{

	}

	public function updateItem($id)
	{

	}

	public function deleteItem($id)
	{
		
	}
}