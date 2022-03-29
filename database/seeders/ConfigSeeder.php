<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConfigSeeder extends Seeder
{
    private array $config_list = [
        [
            "key" => "vip_post_price_per_day" ,
            "value" => "50000",
            "description" => "Price for vip post per day"
        ] ,
        [
            "key" => "vip_post_price_per_hour" ,
            "value" => "500",
            "description" => "Price for vip post per hour"
        ] ,
        [
            "key" => "vip_post_price_per_month" ,
            "value" => "50000",
            "description" => "Price for vip post per month"
        ] ,
        [
            "key" => "vip_post_price_per_year" ,
            "value" => "5000",
            "description" => "Price for vip post per day"
        ] ,
        [
            "key" => "exprired_after_hour" ,
            "value" => "50",
            "description" => "Price for vip post per day"
        ] ,



    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
    }
}
