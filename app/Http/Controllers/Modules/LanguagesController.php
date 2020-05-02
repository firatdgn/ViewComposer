<?php

namespace App\Http\Controllers\Modules;

use App\Languages;
use App\Translations;

class LanguagesController extends Controller
{
	public function index()
	{
		$data['all'] = Languages::all();

		return view('backend.modules.languages.index', $data);
	}

	public function create()
	{
		return view('backend.modules.languages.create');
	}

	public function store()
	{
		Languages::create([
			'name' => request('name'),
			'icon' => request('icon'),
			'value' => request('value')
		]);

		return redirect()->route('languages');
	}

	public function edit($id)
	{
		$data['get'] = Languages::find($id);

		return view('backend.modules.languages.edit', $data);
	}

	public function update($id)
	{

	}

	public function delete($id)
	{
		//eğer son dilse silinemez
	}
}