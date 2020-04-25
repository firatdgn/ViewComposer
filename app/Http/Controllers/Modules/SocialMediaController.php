<?php

namespace App\Http\Controllers\Modules;

use App\SocialMedia;

class SocialMediaController extends Controller
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

	public function edit($id)
	{
		$data['get'] = SocialMedia::find($id);

		return view('backend.modules.socialmedia.edit', $data);
	}

	public function update($id)
	{
		SocialMedia::find($id)->update([
			'name' => request('name'),
			'icon' => request('icon'),
			'value' => request('value')
		]);

		return redirect('Backend/SocialMedia');
	}

	public function delete($id)
	{
		SocialMedia::find($id)->delete();

		return redirect('Backend/SocialMedia');
	}
}