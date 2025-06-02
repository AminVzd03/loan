<?php

namespace Modules\Loan\src\repositories;

use Modules\Loan\Models\Loan;
use Modules\Loan\src\interfaces\LoanRepositoryInterface;

class LoanRepository implements LoanRepositoryInterface
{
    public function create($request) : string {
        Loan::create([
            'name' => $request->name,
        ]);
        return 'You created a loan';
    }
}
