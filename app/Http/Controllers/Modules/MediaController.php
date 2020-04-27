<?php

namespace App\Http\Controllers\Modules;

use App\Media;

class MediaController extends Controller
{
	public function index()
	{
		$data['all'] = Media::all();

		return view('backend.modules.media.index', $data);
	}

	public function create()
	{
		return view('backend.modules.media.create');
	}

	public function store()
	{
		$file = request()->file('link');

		$fileName = time() . $file->getClientOriginalName();

		$file->move('uploads', $fileName);

		Media::create([
			'name'			=> request('name'),
			'description'	=> request('description'),
			'link'			=> $fileName
		]);

		return redirect('Backend/Media');
	}

	public function edit($id)
	{
		$data['get'] = Media::find($id);

		return view('backend.modules.media.edit', $data);
	}

	public function update($id)
	{
		Media::find($id)->update([
			'name'			=> request('name'),
			'description'	=> request('description')
		]);

		return redirect('Backend/Media');
	}

	public function delete($id)
	{
		Media::find($id)->delete();

		return redirect('Backend/Media');
	}
}