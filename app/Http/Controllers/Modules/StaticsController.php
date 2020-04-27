<?php

namespace App\Http\Controllers\Modules;

use App\Statics;

class StaticsController extends Controller
{
	public function index()
	{
		$data['all'] = Statics::all();

		return view('backend.modules.statics.index', $data);
	}

	public function create()
	{
		return view('backend.modules.statics.create');
	}

	public function store()
	{
		Statics::create([
			'key' => request('key'),
			'value' => serialize(request('value')),
			'is_html' => request('is_html')
		]);

		return redirect('Backend/Statics');
	}

	public function edit($id)
	{
		$data['get'] = Statics::find($id);

		return view('backend.modules.statics.edit', $data);
	}

	public function update($id)
	{
		Statics::find($id)->update([
			'name' => request('name'),
			'icon' => request('icon'),
			'value' => request('value')
		]);

		return redirect('Backend/Statics');
	}

	public function delete($id)
	{
		Statics::find($id)->delete();

		return redirect('Backend/Statics');
	}
}