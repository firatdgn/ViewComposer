<?php

namespace App\Http\View\Composers\SocialMedia;

use App\Module;
use Illuminate\View\View;

class Instagram
{
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $modules= Module::where('active', 1)->get();
        $view->with('modules', $modules);
    }
}