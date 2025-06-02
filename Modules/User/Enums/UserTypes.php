<?php

namespace Modules\User\Enums;

use App\Traits\EnumValues;

enum UserTypes: string
{
    use EnumValues;
    case USER = 'User';
    case ADMIN = 'SuperAdmin';
}
