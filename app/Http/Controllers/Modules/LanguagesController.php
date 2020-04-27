<?php

namespace App\Http\Controllers\Modules;

use App\Languages;
use App\Translations;

class LanguagesController extends Controller
{
	public function index()
	{
		$data['all'] = Languages::all();

		return view('backend.modules.socialmedia.index', $data);
	}

	public function create()
	{
		return view('backend.modules.socialmedia.create', $data);
	}

	public function store()
	{
		Languages::create([
			'name' => request('name'),
			'icon' => request('icon'),
			'value' => request('value')
		]);

		return redirect('Backend/SocialMedia');
	}
}