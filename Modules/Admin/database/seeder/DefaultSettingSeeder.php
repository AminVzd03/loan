<?php

namespace Modules\Admin\database\seeder;

use Illuminate\Database\Seeder;
use Modules\Admin\Models\Setting;

class DefaultSettingSeeder extends Seeder
{
    public function run()
    {
        Setting::insert(
           [ [
                'name' => 'installment_min_amount',
                'value' => 1,
                'description' => 'Installment Minimum amount',
            ],
            [
                'name' => 'installment_max_amount',
                'value' => 12,
                'description' => 'Installment Maximum amount',
            ]]
        );
    }
}
