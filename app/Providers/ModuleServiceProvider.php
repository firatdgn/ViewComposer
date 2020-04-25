<?php

namespace App\Providers;

use App\Modules;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Route;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModuleServiceProvider extends ServiceProvider
{


	/**
	 * Bootstrap any application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		$check = Modules::where('name', $this->name)->first();
		if($check === null) {
			Modules::create([
				'name' => $this->name,
				'manage_url' => $this->manageUrl,
				'is_active' => 0,
				'is_loaded' => 0,
				'is_needed_reflesh' => 0,
				'is_dropped' => 0
			]);
		}

		$moduleDetail = Modules::where('name', $this->name)->first();
		if($moduleDetail['is_active'] == 1) {
			if($moduleDetail['is_loaded'] == 0) {
				$this->loadModule();

				Modules::where('name', $this->name)->update([
					'is_loaded' => 1,
					'is_needed_reflesh' => 1,
					'is_dropped' => 0
				]);
			}

			if($moduleDetail['is_needed_reflesh'] == 1) {
				$moduleDetail->update([
					'is_needed_reflesh' => 0
				]);
			}

			if($moduleDetail['is_dropped'] == 1) {
				$this->dropModule();

				Modules::where('name', $this->name)->update([
					'is_loaded' => 0,
					'is_dropped' => 0,
					'is_needed_reflesh' => 1
				]);
			}

			$this->includeFiles();

			if(method_exists($this, 'loadRoutes')) $this->loadRoutes();
		} else {
			if($moduleDetail['is_loaded'] == 1) {
				$this->dropModule();

				Modules::where('name', $this->name)->update([
					'is_loaded' => 0,
					'is_dropped' => 0,
					'is_needed_reflesh' => 1
				]);
			}

			if($moduleDetail['is_needed_reflesh'] == 1) {
				$moduleDetail->update([
					'is_needed_reflesh' => 0
				]);
			}
		}
	}
}
