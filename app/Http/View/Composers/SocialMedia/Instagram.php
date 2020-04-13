<?php

namespace App\Http\View\Composers\SocialMedia;

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
        $view->with('instagram', 'nuh_orun');
    }
}