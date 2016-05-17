<?php

namespace App\Providers;

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
    ];

    /**
     * Register any application authentication / authorization services.
     *
     * @param  \Illuminate\Contracts\Auth\Access\Gate  $gate
     * @return void
     */
    public function boot(GateContract $gate)
    {
        $this->registerPolicies($gate);

        /* FOLLOWING LOOP HAS TO BE COMMENTED IN ORDER TO RUN MIGRATIONS SUCCESFULLY */
        /* COMMENT FROM HERE */

       foreach ($this->getPermissions() as $permission) 
        {
            $gate->define($permission->name, function ($user) use ($permission){
                return $user->hasRole($permission->roles);
            });
        }
        
        /* END OF COMMENT, SORRY ABOUT THAT */
    }

    // Get all permissions
    protected function getPermissions()
    {
        return Permission::with('roles')->get();
    }
}
