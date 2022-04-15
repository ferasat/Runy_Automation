<?php

namespace Dashboard;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class DashboardServiceProvider extends ServiceProvider
{

    public function register()
    {
        $DashboardHelper = base_path('runy/Dashboard/DashboardHelper.php');
        if (file_exists($DashboardHelper)){
            require_once ($DashboardHelper) ;
        }
    }


    public function boot()
    {
        $this->loadMigrationsFrom([
            base_path('runy/Dashboard/migrations')
        ]);

        $this->loadViewsFrom(base_path('runy/Dashboard/views') , 'DashboardView');

        Route::middleware('web')->group(base_path('runy/Dashboard/dashboard_route.php'));
    }
}
