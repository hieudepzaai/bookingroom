<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostPremiumTypeSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $types = [
            [
                "premium_type" => "vip1",
                "priority" => 10,
                "price_per_unit" => 50000,
                "unit" => "day"
            ],


        ];
    }
}
