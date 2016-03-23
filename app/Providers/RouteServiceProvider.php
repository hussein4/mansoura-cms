<?php

namespace App\Providers;

use App\Budgetry;
use App\MR;
use App\PO;
use App\Tag;
use App\Tender;
use App\Vlist;
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
            if (is_numeric($id))
            {
                $vlist = Vlist::find($id);
                return $vlist;
            }
            else
            {
                $vname = 'slug'; // This is the name of the column you wish to search

                return Vlist::where($vname , '=', $id)->first(); //  find the name to id association
            }
            //   return \App\Vlist::published()->findOrFail($id);

        });


        $router->bind('mrs',function($id)
        {
            if (is_numeric($id))
            {
                $mr = MR::find($id);
                return $mr;
            }
            else
            {
                $name = 'slug'; // This is the name of the column you wish to search

                return MR::where($name , '=', $id)->first(); //  find the name to id association
            }
          //  return MR::published()->findOrFail($id);
        });

        $router->bind('pos',function($id)
        {
            if (is_numeric($id))
            {
                $po = PO::find($id);
                return $po;
            }
            else
            {
                $name = 'slug'; // This is the name of the column you wish to search

                return PO::where($name , '=', $id)->first(); //  find the name to id association
            }


        //    return PO::published()->findOrFail($id);
        });

        $router->bind('budgetries',function($id)
        {
            if (is_numeric($id))
            {
                $budgetry = Budgetry::find($id);
                return $budgetry;
            }
            else
            {
                $name = 'slug'; // This is the name of the column you wish to search

                return Budgetry::where($name , '=', $id)->first(); //  find the name to id association
            }
         //   return \App\Budgetry::published()->findOrFail($id);
        });

        $router->bind('tenders',function($id)
        {
            if (is_numeric($id))
            {
                $tender = Tender::find($id);
                return $tender;
            }
            else
            {
                $name = 'slug'; // This is the name of the column you wish to search

                return Tender::where($name , '=', $id)->first(); //  find the name to id association
            }
           // return Tender::published()->findOrFail($id);
        });


        $router->bind('tags',function($name)
        {
            if (is_numeric($name))
            {
                $tag = Tag::find($name);
                return $tag;
            }
            else
            {
                $tname = 'slug'; // This is the name of the column you wish to search

                return Tag::where($tname , '=', $name)->first(); //  find the name to id association
            }

          //  return Tag::where('name',$name)->findOrFail();
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
