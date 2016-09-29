<?php

namespace App\DB\Providers\SQL\Factories\Factories\Location;

/**
 * Created by PhpStorm.
 * User: waqas
 * Date: 4/6/2016
 * Time: 9:58 AM
 */


use App\DB\Providers\SQL\Factories\Factories\Location\Gateways\LocationQueryBuilder;
use App\DB\Providers\SQL\Factories\SQLFactory;
use App\DB\Providers\SQL\Interfaces\SQLFactoriesInterface;
use App\DB\Providers\SQL\Models\Location;

class LocationFactory extends SQLFactory implements SQLFactoriesInterface
{
    private $tableGateway = null;
    public function __construct()
    {
        $this->model = new Location();
        $this->tableGateway = new LocationQueryBuilder();
    }

    function find($id)
    {
        return $this->map($this->tableGateway->find($id));
    }
    function all()
    {
       return $this->mapCollection($this->tableGateway->all());
    }
    public function update(Location $location)
    {
        $location->updatedAt = date('Y-m-d h:i:s');
        return $this->tableGateway->update($location->id ,$this->mapPropertyTypeOnTable($location));
    }
    public function store(Location $location)
    {
        $location->createdAt = date('Y-m-d h:i:s');
        return $this->tableGateway->insert($this->mapPropertyTypeOnTable($location));
    }
    public function delete(Location $location)
    {
        return $this->tableGateway->delete($location->id);
    }
    private function mapPropertyTypeOnTable(Location $location)
    {
        return [
            'city_id'=>$location->cityId,
            'location'=>$location->location,
            'lat'=>$location->lat,
            'lang'=>$location->long,
            'updated_at' => $location->updatedAt,
        ];
    }
    public function updateWhere(array $where, array $data)
    {
        return $this->tableGateway->updateWhere($where, $data);
    }

    function map($result)
    {
        $location = clone($this->model);
        $location->id=$result->id;
        $location->cityId = $result->city_id;
        $location->location = $result->location;
        $location->lat = $result->lat;
        $location->long = $result->long;
        $location->createdAt = $result->created_at;
        $location->updatedAt = $result->updated_at;
        return $location;
    }
    public function getTable()
    {
        return $this->tableGateway->getTable();
    }
    private function setTable($table)
    {
        $this->tableGateway->setTable($table);
    }
}