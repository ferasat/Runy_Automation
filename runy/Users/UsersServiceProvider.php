<?php

namespace Users;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class UsersServiceProvider extends ServiceProvider
{

    public function register()
    {
        $UsersHelper = base_path('runy/Users/UserHelper.php');
        if (file_exists($UsersHelper)){
            require_once ($UsersHelper) ;
        }
    }


    public function boot()
    {
        $this->loadMigrationsFrom([
            base_path('runy/Users/migrations')
        ]);

        $this->loadViewsFrom(base_path('runy/Users/views') , 'UsersView');

        Route::middleware('web')->group(base_path('runy/Users/profile_route.php'));
    }
}
