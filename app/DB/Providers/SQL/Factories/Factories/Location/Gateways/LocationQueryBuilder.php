<?php
namespace App\DB\Providers\SQL\Factories\Factories\Location\Gateways;
/**
 * Created by PhpStorm.
 * User: waqas
 * Date: 4/6/2016
 * Time: 10:07 AM
 */
use App\DB\Providers\SQL\Factories\Helpers\QueryBuilder;
use Illuminate\Support\Facades\DB;
class LocationQueryBuilder extends QueryBuilder
{

    public function __Construct()
    {
        $this->table = 'locations';
    }
    public function search($params)
    {
        return DB::table($this->table)
            ->select($this->table.'.*')
            ->where($this->table.'city_id','=',$params['cityId'])
            ->where($this->table.'.location','=',$params['location'])
            ->get();
    }
}