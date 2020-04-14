<?php

namespace App\Http\Controllers;

use App\Module;

class BackendController extends Controller {
	public function index()
	{
		$modules = Module::where('active', 1)->get();

		// bura veri tabanından alınacak şimdilik böyle kalsın
		$data['modules'] = [
			[
				'name'	=> 'Sosyal Medya',
				'url'	=> 'SocialMedia'
			]
		];

		return view('backend.dashboard', $data);
	}
}