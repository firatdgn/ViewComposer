<?php

namespace App\Http\Controllers\Modules;

use App\Analytics;

class AnalyticsController extends Controller
{
	public function index()
	{
		$data['all'] = Analytics::all();

		return view('backend.modules.analytics.index', $data);
	}

	public function edit($id)
	{
		$data['get'] = Analytics::find($id);

		return view('backend.modules.analytics.edit', $data);
	}

	public function update($id)
	{
		Analytics::find($id)->update([
			'value' => request('value')
		]);

		return redirect('Backend/Analytics');
	}

}