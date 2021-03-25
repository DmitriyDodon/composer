<?php

namespace App\Providers;

use Dmitriy\Ua\whichBrowserService;
use Illuminate\Support\ServiceProvider;

class UserAgentProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(\Dmitriy\Ua\UserAgentInterface::class , function (){
//            return new whichBrowserService();
            return new  \Dmitriy\Ua\UserAgentParserService();
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
