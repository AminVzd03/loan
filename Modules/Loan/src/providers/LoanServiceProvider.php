<?php

namespace Modules\Loan\src\providers;

use Illuminate\Support\ServiceProvider;

class LoanServiceProvider extends ServiceProvider
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
        $this->loadRoutesFrom(base_path('Modules/Loan/routes/web.php'));
        $this->loadViewsFrom(base_path('Modules/Loan/resources/views'), 'User');
        $this->loadMigrationsFrom(base_path('Modules/Loan/database/migrations'));

    }
}
