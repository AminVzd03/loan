<?php

namespace Modules\Loan\src\Enum;

use App\Traits\EnumValues;

enum LoanStatus: string
{
    use EnumValues;
    case PENDING = 'Pending';
    case APPROVED = 'Approved';
    case REJECTED = 'Rejected';
    case PAYED = 'Paid';
    case PAYING_INSTALLMENTS = 'PendingInstallments';
    case INSTALLMENTS_PAYED = 'InstallmentsPayed';
}

