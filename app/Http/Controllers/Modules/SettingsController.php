<?php

namespace App\Http\Controllers\Modules;

use App\Settings;

class SettingsController extends Controller
{
	public function index()
	{
		$data['all'] = Settings::all();

		return view('backend.modules.settings.index', $data);
	}

	public function create()
	{
		return view('backend.modules.settings.create');
	}

	public function store()
	{
		Settings::create([
			'type' => request('type'),
			'key' => request('key'),
			'title' => request('title'),
			'description' => request('description'),
			'value' => request('value'),
		]);

		return redirect('Backend/Settings');
	}

	public function edit($id)
	{
		$data['get'] = Settings::find($id);

		return view('backend.modules.settings.edit', $data);
	}

	public function update($id)
	{
		Settings::find($id)->update([
			'type' => request('type'),
			'key' => request('key'),
			'title' => request('title'),
			'description' => request('description'),
			'value' => request('value'),
		]);

		return redirect('Backend/Settings');
	}
}