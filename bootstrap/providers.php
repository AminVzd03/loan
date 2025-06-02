<?php

return [
    App\Providers\AppServiceProvider::class,
    \Modules\Loan\src\providers\LoanServiceProvider::class,
    Modules\Demand\src\Providers\DemandServiceProvider::class,
    Modules\Installment\src\providers\InstallmentServiceProvider::class,
    Modules\User\src\Providers\UserServiceProvider::class,
];
