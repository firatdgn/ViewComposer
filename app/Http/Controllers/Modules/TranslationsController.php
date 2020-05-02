<?php

namespace App\Http\Controllers\Modules;

use App\Translations;

class TranslationsController extends Controller
{
	public function index()
	{
		$data['all'] = Translations::all();

		return view('backend.modules.languages.index', $data);
	}

	public function create()
	{
		return view('backend.modules.languages.create', $data);
	}

	public function store()
	{
		Translations::create([
			'name' => request('name'),
			'icon' => request('icon'),
			'value' => request('value')
		]);

		return redirect('Backend/SocialMedia');
	}

	public function edit($id)
	{

	}

	public function update($id)
	{

	}

	public function delete($id)
	{
		
	}
}