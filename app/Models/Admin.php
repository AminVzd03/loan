<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Modules\User\Models\User;

class Admin extends User
{
    use HasApiTokens;

    protected $table = 'users';


}
