<?php

namespace App\Providers;

use App\MR;
use App\PO;
use App\Tender;
use App\Vlist;
use Illuminate\Support\ServiceProvider;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->composeNavigation();
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     *Compose Home page
     */
    public function composeNavigation()
    {
        view()->composer('home', function($view)
        {
            $view->with('latest', Vlist::latest()->first());
            $view->with('latest', MR::latest()->first());
            $view->with('latest', Tender::latest()->first());
            $view->with('latest', PO::latest()->first());
        });
    }
}
