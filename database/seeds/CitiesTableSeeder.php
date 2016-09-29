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
            ['city' => 'lahore', 'country_id'=>1,'priority'=>0,'path'=>'assets/imgs/42_ads/7971f921fcb9833b8632dea27ed23426.jpg'],
            ['city' => 'Karachi', 'country_id'=>1,'priority'=>10,'path'=>'assets/imgs/42_ads/7971f921fcb9833b8632dea27ed23426.jpg']
        ]);
    }
}
