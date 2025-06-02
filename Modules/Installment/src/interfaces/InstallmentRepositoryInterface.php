<?php

namespace Modules\Installment\src\interfaces;

interface InstallmentRepositoryInterface
{
    public function getInstallments($loanId);

    public function payInstallment($installment,$request);
    public function calculateFine($installment,$payDate,$loanId);
}
