<?php

namespace Modules\Installment\src\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\Installment\src\repositories\installmentRepository;
use Modules\Loan\Models\Loan;

class InstallmentController extends Controller
{
    public function __construct(InstallmentRepository $installmentRepository) {
            $this->installmentRepository = $installmentRepository;
    }
    public function index() {
        $user = auth()->user();
        $loanId = Loan::where('user_id',$user['id'])->first()->id;
        $installment = $this->installmentRepository->getInstallments($loanId);
        return response()->json($installment);
    }
}
