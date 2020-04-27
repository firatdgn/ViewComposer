<?php

namespace App\Http\Controllers\Modules;

use App\Blog;
use App\BlogCategories;

class BlogController extends Controller
{
	public function index()
	{
		$data['all'] = Blog::all();

		return view('backend.modules.blog.index', $data);
	}

	public function create()
	{
		return view('backend.modules.blog.create', $data);
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