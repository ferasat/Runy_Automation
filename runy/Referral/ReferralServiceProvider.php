<?php

namespace Referral;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ReferralServiceProvider extends ServiceProvider
{

    public function register()
    {
        $ReferralHelper = base_path('runy/Referral/ReferralHelper.php');
        if (file_exists($ReferralHelper)){
            require_once ($ReferralHelper) ;
        }
    }


    public function boot()
    {
        $this->loadMigrationsFrom([
            base_path('runy/Referral/migrations')
        ]);

        $this->loadViewsFrom(base_path('runy/Referral/views') , 'ReferralView');

        Route::middleware('web')->group(base_path('runy/Referral/referral_route.php'));
    }
}
