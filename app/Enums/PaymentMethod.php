<?php

namespace App\Enums;

use App\Traits\EnumValues;

enum PaymentMethod : string
{
    use EnumValues;
    case GATEWAY = 'Gateway';
    case CREDIT = 'Credit';
}
