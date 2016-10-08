<?php
/**
 * Created by PhpStorm.
 * User: waqas
 * Date: 4/6/2016
 * Time: 9:58 AM
 */
namespace App\DB\Providers\SQL\Factories\Factories\AgencyLocation;

use App\DB\Providers\SQL\Factories\Factories\AgencyLocation\Gateways\AgencyLocationQueryBuilder;
use App\DB\Providers\SQL\Factories\SQLFactory;
use App\DB\Providers\SQL\Interfaces\SQLFactoriesInterface;
use App\DB\Providers\SQL\Models\AgencyLocation;
use App\DB\Providers\SQL\Models\AgencySociety;


class AgencyLocationFactory extends SQLFactory implements SQLFactoriesInterface
{
    private $tableGateway = null;
    public function __construct()
    {
        $this->model = new AgencyLocation();
        $this->tableGateway = new AgencyLocationQueryBuilder();
    }
    public function all()
    {
        return $this->mapCollection($this->tableGateway->all());
    }
    public function get($agencyId)
    {
        return $this->mapCollection($this->tableGateway->getWhere(['agency_id'=>$agencyId]));
    }
    public function find($id)
    {
        return $this->map($this->tableGateway->find($id));
    }
    public function addSocieties(array $agencySocieties)
    {
        $agencySocietiesRecord =[];
        foreach($agencySocieties as $agencySociety)
        {
            $agencySocietiesRecord[] =  $this->mapAgencySocietyOnTable($agencySociety);
        }
        return $this->tableGateway->insertMultiple($agencySocietiesRecord);
    }

    public function deleteAgencySocieties($agencyId, array $societyIds)
    {
        return $this->tableGateway->deleteAgencySocieties($agencyId, $societyIds);
    }

    public function getTable()
    {
        return $this->tableGateway->getTable();
    }
    private function setTable($table)
    {
        $this->tableGateway->setTable($table);
    }

    public function map($result)
    {
        $agencySociety = clone($this->model);
        $agencySociety->id = $result->id;
        $agencySociety->locationId = $result->location_id;
        $agencySociety->agencyId = $result->agency_id;
        $agencySociety->createdAt = $result->created_at;
        $agencySociety->updatedAt = $result->updated_at;
        return $agencySociety;
    }
    private function mapAgencySocietyOnTable(AgencySociety $agencySociety)
    {
        return [
            'agency_id' => $agencySociety->agencyId,
            'location_id' => $agencySociety->societyId,
            'updated_at' => $agencySociety->updatedAt,
        ];
    }
}