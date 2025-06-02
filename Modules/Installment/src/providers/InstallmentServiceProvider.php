<?php

namespace Modules\Installment\src\providers;

use Illuminate\Support\ServiceProvider;
use Modules\Installment\src\interfaces\InstallmentRepositoryInterface;
use Modules\Installment\src\repositories\installmentRepository;

class InstallmentServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(InstallmentRepositoryInterface::class, installmentRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    { // add foreach loop for route files
        $this->loadRoutesFrom(base_path('Modules/Installment/routes/web.php'));
        $this->loadRoutesFrom(base_path('Modules/Installment/routes/api.php'));
        $this->loadViewsFrom(base_path('Modules/Installment/resources/views'), 'User');
        $this->loadMigrationsFrom(base_path('Modules/Installment/database/migrations'));

    }
}
