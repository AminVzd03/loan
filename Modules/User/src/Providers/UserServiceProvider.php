<?php

namespace Modules\User\src\Providers;

use Illuminate\Support\ServiceProvider;

class UserServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->loadRoutesFrom(base_path('Modules/User/routes/web.php'));
        $this->loadViewsFrom(base_path('Modules/User/resources/views'), 'User');
        $this->loadMigrationsFrom(base_path('Modules/User/database/migrations'));
    }
}
