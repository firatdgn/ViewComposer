<?php

namespace App\Providers;

use App\Module;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Route;

class SocialMediaServiceProvider extends ServiceProvider
{

    var $name = 'SosyalMedya';
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if(Module::where('value', $this->name)->first()['active'] == 1) {
            require __DIR__ . '../../helpers-socialmedia.php';

            View::composer(
                'modules.socialmedia.instagram', 'App\Http\View\Composers\SocialMedia\Instagram'
            );


            Route::group([ 'prefix' => 'Backend/SocialMedia' ], function() {
                Route::get('/' , 'App\Http\Controllers\Modules\SocialMedia\SocialMediaController@index');
            });
        }
    }
}
