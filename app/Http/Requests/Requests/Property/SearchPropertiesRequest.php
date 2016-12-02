<?php
/**
 * Created by PhpStorm.
 * User: zeenomlabs
 * Date: 3/15/2016
 * Time: 9:56 PM
 */

namespace App\Http\Requests\Requests\Property;

use App\DB\Providers\SQL\Models\Property;
use App\Http\Requests\Interfaces\RequestInterface;
use App\Http\Requests\Request;
use App\Http\Validators\Validators\PropertyValidators\SearchPropertiesValidator;
use App\Repositories\Providers\Providers\BlocksRepoProvider;
use App\Repositories\Providers\Providers\CitiesRepoProvider;
use App\Repositories\Providers\Providers\LocationsRepoProvider;
use App\Repositories\Providers\Providers\PropertyPurposesRepoProvider;
use App\Repositories\Providers\Providers\PropertySubTypesRepoProvider;
use App\Repositories\Providers\Providers\PropertyTypesRepoProvider;
use App\Transformers\Request\Property\SearchPropertiesTransformer;

class SearchPropertiesRequest extends Request implements RequestInterface{

    public $validator = null;
    public function __construct(){
        parent::__construct(new SearchPropertiesTransformer($this->getOriginalRequest()));
        $this->validator = new SearchPropertiesValidator($this);
    }

    public function getParams()
    {
        $params = $this->all();
        $params['locationId'] = ($params['locationId'] != "" && $params['locationId'] != null)?explode(',',$params['locationId']):[];
        return $params;
    }

    public function getParamObjects()
    {
        $paramObjects = [];
        $params = $this->getParams();
        $purposes = (new PropertyPurposesRepoProvider())->repo();
        $types = (new PropertyTypesRepoProvider())->repo();
        $subTypes = (new PropertySubTypesRepoProvider())->repo();
        $cities = (new CitiesRepoProvider())->repo();
        $locations = (new LocationsRepoProvider())->repo();
        $blocks = (new BlocksRepoProvider())->repo();

        $paramObjects['type'] = ($params['propertyTypeId'] != null)?$types->getById($params['propertyTypeId']):null;
        $paramObjects['subType'] = ($params['subTypeId'] != null)?$subTypes->getById($params['subTypeId']):null;
        $paramObjects['purpose'] = ($params['purposeId'] != null)?$purposes->getById($params['purposeId']):null;
        $paramObjects['city'] = ($params['cityId'] != null)?$cities->getById($params['cityId']):null;
        $paramObjects['location'] = ($params['locationId'] != null)?$locations->getById($params['locationId'][0]):null;
        $paramObjects['block'] = ($params['blockId'] != null)?$blocks->getById($params['blockId']):null;
        $paramObjects['wanted'] = ($params['neededProperties'] != null)?true:null;
        return $paramObjects;
    }

    public function breadCrumbs()
    {
        $breadCrumbs = [];
        $objs = $this->getParamObjects();

        if($objs['wanted'] != null){
            $breadCrumbs['wanted'] = ['title'=>'wanted','destination'=>'#','original'=>$objs['wanted']];
        }
        if($objs['type'] != null){
            $breadCrumbs['type'] = ['title'=>$objs['type']->name,'destination'=>'#','original'=>$objs['type']];
        }
        if($objs['subType'] != null){
            $breadCrumbs['subType'] = ['title'=>$objs['subType']->name,'destination'=>'#','original'=>$objs['subType']];
        }
        if($objs['purpose'] != null){
            $breadCrumbs['purpose'] = ['title'=>$objs['purpose']->name,'destination'=>'#','original'=>$objs['purpose']];
        }
        if($objs['city'] != null){
            $breadCrumbs['city'] = ['title'=>$objs['city']->name,'destination'=>'#','original'=>$objs['city']];
        }
        if($objs['location'] != null){
            $breadCrumbs['location'] = ['title'=>$objs['location']->location,'destination'=>'#','original'=>$objs['location']];
        }
        if($objs['block'] != null){
            $breadCrumbs['block'] = ['title'=>$objs['block']->name,'destination'=>'#','original'=>$objs['block']];
        }

        return $breadCrumbs;
    }

    public function authorize(){
        return true;
    }

    public function validate(){
        return $this->validator->validate();
    }

} 