<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Admin\database\seeder\DefaultSettingSeeder;
use Modules\User\database\seeder\UserSeeder;

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
