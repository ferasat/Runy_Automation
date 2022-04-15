<?php

namespace Rqs;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class RqsServiceProvider extends ServiceProvider
{

    public function register()
    {
        $RqsHelper = base_path('runy/Rqs/RqsHelper.php');
        if (file_exists($RqsHelper)){
            require_once ($RqsHelper) ;
        }
    }


    public function boot()
    {
        $this->loadMigrationsFrom([
            base_path('runy/Rqs/migrations')
        ]);

        $this->loadViewsFrom(base_path('runy/Rqs/views') , 'RqsView');

        Route::middleware('web')->group(base_path('runy/Rqs/rqs_route.php'));
    }
}
