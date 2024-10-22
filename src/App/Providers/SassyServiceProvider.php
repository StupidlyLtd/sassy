<?php

namespace Stupidly\Sassy\App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\Router;
use Stupidly\Sassy\App\Services\SassyService;

class SassyServiceProvider extends ServiceProvider
{
    public function boot(Router $router)
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
        $this->publishes([
            __DIR__.'/../../stubs/block.stub' => base_path('stubs'),
        ], 'stubs');
        $this->loadMigrationsFrom(__DIR__.'/../../Database/migrations');
        $this->loadRoutesFrom(__DIR__.'/../../routes/sassy.php');
        $this->loadViewsFrom(__DIR__.'/../../resources/views', 'sassy');
        $router->middlewareGroup('sassy', [
            \Stupidly\Sassy\App\Http\Middleware\IsSassyAdmin::class
        ]);
        $this->app->singleton(SassyService::class, function () {
            return new SassyService();
        });
    }

    public function register()
    {
        //
    }
}
