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
        $query = DB::table($this->table)
            ->select($this->table.'.*');
        if($params['cityId'] != null && $params['cityId'] != "" && $params['cityId'] == 0)
            $query = $query->where($this->table.'.city_id','=',$params['cityId']);
        return $query->where($this->table.'.location','like','%'.$params['keyword'].'%')->get();
    }
}