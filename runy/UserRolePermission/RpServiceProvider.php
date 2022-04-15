<?php

namespace Rp;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class RpServiceProvider extends ServiceProvider
{

    public function register()
    {
        $RpHelper = base_path('runy/UserRolePermission/RpHelper.php');
        if (file_exists($RpHelper)){
            require_once ($RpHelper) ;
        }
    }


    public function boot()
    {
        $this->loadMigrationsFrom([
            base_path('runy/UserRolePermission/migrations')
        ]);

        $this->loadViewsFrom(base_path('runy/UserRolePermission/views') , 'RpView');

        Route::middleware('web')->group(base_path('runy/UserRolePermission/user_role_permission_route.php'));
    }
}
