<?php

namespace App\Providers;

use App\Module;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

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
            View::composer(
                'socialmedia.instagram', 'App\Http\View\Composers\SocialMedia\Instagram'
            );
        }
    }
}
