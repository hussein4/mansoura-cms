<?php

namespace App\Providers;

use Illuminate\Routing\Router;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to the controller routes in your routes file.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @param  \Illuminate\Routing\Router  $router
     * @return void
     */
    public function boot(Router $router)
    {
        //

        parent::boot($router);

       // $router->model('vlist','App\Vlist');
        $router->bind('vlist',function($id)
        {
            return \App\Vlist::published()->findOrFail($id);
        });


        $router->bind('mrs',function($id)
        {
            return \App\MR::published()->findOrFail($id);
        });

        $router->bind('pos',function($id)
        {
            return \App\PO::published()->findOrFail($id);
        });

        $router->bind('budgetries',function($id)
        {
            return \App\Budgetry::published()->findOrFail($id);
        });

        $router->bind('tenders',function($id)
        {
            return \App\Tender::published()->findOrFail($id);
        });


        $router->bind('tags',function($name)
        {
            return \App\Tag::where('name',$name)->findOrFail();
        });

    }

    /**
     * Define the routes for the application.
     *
     * @param  \Illuminate\Routing\Router  $router
     * @return void
     */
    public function map(Router $router)
    {
        $router->group(['namespace' => $this->namespace], function ($router) {
            require app_path('Http/routes.php');
        });
    }
}
