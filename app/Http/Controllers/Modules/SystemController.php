<?php

namespace App\Http\Controllers\Modules;

use App\Modules;

class SystemController extends Controller
{
	public function index()
	{
		$data['all'] = SocialMedia::all();

		return view('backend.modules.socialmedia.index', $data);
	}

	public function modules()
	{
		$data['all'] = Modules::all();

		return view('backend.modules.system.modules', $data);
	}

	public function activeModule($id)
	{
		Modules::find($id)->update([ 'is_active' => 1 ]);

		return redirect('Backend');
	}

	public function deactiveModule($id)
	{
		Modules::find($id)->update([ 'is_active' => 0 ]);

		return redirect('Backend');
	}
}