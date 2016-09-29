<?php

use Illuminate\Database\Seeder;

class LocationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('locations')->insert([
            ['city_id'=>1, 'location'=> "DHA Defence".rand(1,100),'lat'=>31314616,'long'=>rand(1,361465485)],
            ['city_id'=>1, 'location'=> "DHA Defence".rand(1,100),'lat'=>31314616,'long'=>rand(1,361465485)],
            ['city_id'=>1, 'location'=> "DHA Defence".rand(1,100),'lat'=>31314616,'long'=>rand(1,361465485)],
            ['city_id'=>1, 'location'=> "DHA Defence".rand(1,100),'lat'=>31314616,'long'=>rand(1,361465485)],
            ['city_id'=>1, 'location'=> "DHA Defence".rand(1,100),'lat'=>31314616,'long'=>rand(1,361465485)],
            ['city_id'=>1, 'location'=> "DHA Defence".rand(1,100),'lat'=>31314616,'long'=>rand(1,361465485)],
            ['city_id'=>1, 'location'=> "DHA Defence".rand(1,100),'lat'=>31314616,'long'=>rand(1,361465485)],
            ['city_id'=>1, 'location'=> "DHA Defence".rand(1,100),'lat'=>31314616,'long'=>rand(1,361465485)],
            ['city_id'=>1, 'location'=> "DHA Defence".rand(1,100),'lat'=>31314616,'long'=>rand(1,361465485)],
        ]);
    }
}
