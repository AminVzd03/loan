<?php

namespace App\Enums;

use App\Traits\EnumValues;

enum DemandStatus : string
{
    use EnumValues;
    case PENDING = 'Pending';
    case APPROVED = 'Approved';
    case REJECTED = 'Rejected';
}
