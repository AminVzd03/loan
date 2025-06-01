<?php
namespace Modules\Demand\src\Providers;

use Illuminate\Support\ServiceProvider;

class DemandServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //$this->mergeConfigFrom('../config/demand.php', 'demand');
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
       // $this->loadRoutesFrom(__DIR__.'/routes/user/api.php');
        //$this->loadMigrationsFrom(__DIR__ . '../database/migrations');
    }
}
