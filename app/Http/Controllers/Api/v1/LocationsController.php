<?php
/**
 * Created by WAQAS.
 * User: waqas
 * Date: 4/7/2016
 * Time: 11:10 AM
 */
namespace App\Http\Controllers\Api\V1;

use App\Http\Requests\Requests\Location\GetLocationByCityRequest;
use App\Http\Responses\Responses\ApiResponse;
use App\Repositories\Providers\Providers\LocationsRepoProvider;


class LocationsController extends ApiController
{
    private $society ;
    public $response;
    public function __construct
    (
        LocationsRepoProvider $societiesRepository,
        ApiResponse $response
    )
    {
        $this->location  = (new LocationsRepoProvider())->repo();
        $this->response = $response;
    }

    public function store(AddLocationRequest $request)
    {
        $society = $request->getSocietyModel();
        $societyId = $this->society->store($society);
        $society->id = $societyId;
        return $this->response->respond(['data'=>[
            'society'=>$society
        ]]);
    }

    public function all(GetAllLocationsRequest $request)
    {
        return $this->response->respond(['data'=>[
            'societies'=>$this->society->all()
        ]]);
    }

    public function delete(DeleteLocationRequest $request)
    {
        return $this->response->respond(['data'=>[
            'society'=>$this->society->delete($request->getSocietyModel())
        ]]);
    }

    public function update(UpdateLocationRequest $request)
    {
        $society = $request->getSocietyModel();
        $this->society->update($society);
        return $this->response->respond(['data'=>[
            'society'=>$society
        ]]);
    }

    public function getByCity(GetLocationByCityRequest $request)
    {
        return $this->response->respond(['data'=>[
         'location'=> $this->location->getByCity($request->get('cityId'))
    ]]);
    }
}