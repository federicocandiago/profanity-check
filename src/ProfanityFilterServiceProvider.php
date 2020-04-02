<?php

namespace Sworup\ProfanityFilter;

use Illuminate\Support\ServiceProvider;

class ProfanityFilterServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $configPath = __DIR__.'/../config/config.php';
        $this->mergeConfigFrom($configPath, 'profanity-filter');
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {        
        //..
    }
}