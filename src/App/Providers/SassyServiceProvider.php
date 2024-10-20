<?php

namespace Stupidly\Sassy\App\Providers;

use Illuminate\Support\ServiceProvider;
use Stupidly\Sassy\App\Services\SassyService;

class SassyServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../../config/sassy.php',
            'sassy'
        );
        $this->publishes([
            __DIR__.'/../../config/sassy.php' => config_path('sassy.php'),
        ], 'config');
        $this->publishes([
            __DIR__.'/../../Database/migrations' => database_path('migrations'),
        ], 'migrations');
        $this->loadMigrationsFrom(__DIR__.'/../../Database/migrations');

        $this->app->singleton(SassyService::class, function () {
            return new SassyService();
        });
    }

    public function register()
    {
        //
    }
}
