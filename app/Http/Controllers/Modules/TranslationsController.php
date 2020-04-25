<?php

namespace App\Http\Controllers\Modules;

use App\SocialMedia;

class TranslationsController extends Controller
{
	public function index()
	{
		$data['all'] = SocialMedia::all();

		return view('backend.modules.socialmedia.index', $data);
	}

	public function create()
	{
		return view('backend.modules.socialmedia.create', $data);
	}

	public function store()
	{
		SocialMedia::create([
			'name' => request('name'),
			'icon' => request('icon'),
			'value' => request('value')
		]);

		return redirect('Backend/SocialMedia');
	}
}