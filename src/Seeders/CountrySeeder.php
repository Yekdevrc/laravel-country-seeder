<?php

namespace Yekdev\CountrySeeder\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    public function run()
    {
        $countries = require __DIR__ . '/../../database/data/countries.php';

        foreach ($countries as $country) {
            DB::table('countries')->updateOrInsert(
                ['code' => $country['code']],
                ['name' => $country['name']]
            );
        }
    }
}
