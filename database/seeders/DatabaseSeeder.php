<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Admin\database\DefaultSettingSeeder;
use Modules\User\database\seeder\UserSeeder;
use Modules\User\Models\User;

// use Illuminate\database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UserSeeder::class);
        $this->call(DefaultSettingSeeder::class);
    }
}
