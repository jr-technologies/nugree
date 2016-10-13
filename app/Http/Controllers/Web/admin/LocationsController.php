<?php
/**
 * Created by WAQAS.
 * User: waqas
 * Date: 4/7/2016
 * Time: 11:10 AM
 */
namespace App\Http\Controllers\Web\Admin;

use App\Http\Responses\Responses\WebResponse;
use App\Repositories\Providers\Providers\CitiesRepoProvider;
use App\Repositories\Providers\Providers\LocationsRepoProvider;
use App\Http\Controllers\Controller;


class LocationsController extends Controller
{
    public $cities ;
    public $response;
    public function __construct(WebResponse $webResponse)
    {
        $this->location  = (new LocationsRepoProvider())->repo();
        $this->response = $webResponse;
        $this->cities = (new CitiesRepoProvider())->repo();
    }
    public function index()
    {
        return $this->response->setView('admin.location.location')->respond(['data'=>[
            'cities'=>$this->cities->all()
        ]]);
    }

}