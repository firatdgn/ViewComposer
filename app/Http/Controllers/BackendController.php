<?php

namespace App\Http\Controllers;

use App\Modules;

class ModulesController extends Controller {
	public function index()
	{
		$data['modules'] = Modules::all();

		return view('backend.modules.index', $data);
	}

	public function active($id)
	{
		Modules::find($id)->update([ 'is_active' => 1 ]);

		return redirect('Backend/Modules');
	}

	public function deactive($id)
	{
		Modules::find($id)->update([ 'is_active' => 0 ]);

		return redirect('Backend/Modules');
	}
}