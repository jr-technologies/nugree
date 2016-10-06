<?php

use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities')->insert([
            ['city' => 'lahore', 'country_id'=>1,'priority'=>11,'path'=>'assets/imgs/42_ads/assets/imgs/42_ads/1e6ae4ada992769567b71815f124fac5.jpg'],
            ['city' => 'Karachi', 'country_id'=>1,'priority'=>10,'path'=>'assets/imgs/42_ads/assets/imgs/42_ads/4a72287dca6a1251f24f948b5819c647.jpg']
        ]);
    }
}
