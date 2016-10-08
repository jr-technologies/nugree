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
        $final =[];
        for($i=1;$i <200;$i++)
        {
            $final[] =['city_id'=>1, 'location'=> "DHA Defence".rand(1,10000),'lat'=>31314616,'long'=>rand(1,361465485)];
        }


        DB::table('locations')->insert($final);
    }
}
