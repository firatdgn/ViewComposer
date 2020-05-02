<?php

namespace App\Http\Controllers;

use App\Modules;

class BackendController extends Controller {
	public function index()
	{
		$data['modules'] = Modules::all();

		return view('backend.modules.index', $data);
	}


}