<?php

namespace App\Providers;

use Dmitriy\Geo\GeoServiceInteface;
use Dmitriy\Geo\ipstackService;
use Dmitriy\Geo\MaxmindService;
use Illuminate\Support\ServiceProvider;

class VisitServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(GeoServiceInteface::class , function (){
            return new MaxmindService();
//            return new ipstackService();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
