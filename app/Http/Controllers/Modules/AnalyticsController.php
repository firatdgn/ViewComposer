<?php

namespace App\Http\Controllers\Modules;

use App\Analytics;

class AnalyticsController extends Controller
{
	public function index()
	{
		$data['all'] = Analytics::all();

		return view('backend.modules.socialmedia.index', $data);
	}

	public function update()
	{
		//Analytics::where('key')
	}

}