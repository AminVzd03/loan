<?php

namespace Modules\User\database\seeder;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Modules\User\Enums\UserTypes;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Amin Valizade' ,
            'phone' => '09354379206',
            'email' => 'aminvzd@gmial.com',
            'password' => '225588',
            'user_type' => UserTypes::USER->value,
        ]);
    }
}
