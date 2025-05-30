<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Admin extends User
{
    use HasApiTokens;

    protected $table = 'users';

    protected $fillable = ['name','phone','password','email'];

    public static function where(string $string, mixed $phone)
    {
    }

}
