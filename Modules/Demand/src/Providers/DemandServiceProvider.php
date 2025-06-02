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
        $this->loadRoutesFrom(base_path('Modules/Demand/routes/user/web.php'));
        $this->loadMigrationsFrom(base_path('Modules/Demand/database/migrations'));
        $this->loadViewsFrom(base_path('Modules/Demand/views'), 'Demand');
    }
}
