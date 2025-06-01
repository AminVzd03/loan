<?php


namespace Modules\Demand\src\enum;

use App\Traits\EnumValues;

enum DemandStatus: string
{
    use EnumValues;

    case PENDING = 'Pending';
    case APPROVED = 'Approved';
    case REJECTED = 'Rejected';
}
