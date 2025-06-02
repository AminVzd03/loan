<?php

namespace Modules\Installment\src\repositories;

use Carbon\Carbon;
use Modules\Installment\Models\Installment;
use Modules\Installment\src\interfaces\InstallmentRepositoryInterface;
use Modules\Loan\Models\Loan;

class installmentRepository implements installmentRepositoryInterface
{
    public function getInstallments($loanId) {
        return  Installment::where('loan_id', $loanId)->get();

    }
    public function payInstallment($installment,$request) {

    }

    public function calculateFine($installment,$payDate,$loanId) {

        $dueDate =  Carbon::createFromTimestamp(Installment::find($installment)->due_date);
        $payedDate = Carbon::createFromFormat('Y-m-d', $payDate);

        if($dueDate >= $payedDate) {
            return $amount = 0 ;
        }

        $finedDays = $dueDate->diffInDays($payedDate);
        if($finedDays < 7) {
            return $amount = 0 ;
        }

         $fined_counts = Installment::where('loan_id', $loanId)
         ->where('fined',true)
         ->count();
            if($fined_counts = 0) {
                $fined_counts = 1 ;
            }
            $fined_amount = $fined_counts * $installment->amount * 0.00096774 * $finedDays;






    }
}
