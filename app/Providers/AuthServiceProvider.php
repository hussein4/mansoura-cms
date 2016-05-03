<?php

namespace App\Providers;

use App\Policies\VlistPolicy;
use \App\Vlist;
use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use App\Permission;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
        Vlist::class => VlistPolicy::class,
    ];

    /**
     * Register any application authentication / authorization services.
     *
     * @param  \Illuminate\Contracts\Auth\Access\Gate  $gate
     * @return void
     */
    public function boot(GateContract $gate)
    {
       // parent::registerPolicies($gate);
        $this->registerPolicies($gate);

        $gate->define('delete-vlist', function($user, $vlist) {
            return $user->id == $vlist->user_id;
        });

        foreach ($this->getPermissions() as $permission)
        {
            $gate->define($permission->name ,function($user)
            {
               $user->hasRole($permission->roles);
            });
        }

    }

    protected function getPermissions()
    {
        return Permission::with('roles')->get();
    }

}
