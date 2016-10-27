<?php
/**
 * Created by PhpStorm.
 * User: WAQAS
 * Date: 4/25/2016
 * Time: 10:26 AM
 */

namespace App\Libs\Json\Prototypes\Prototypes\Property\Location;

use App\Libs\Json\Prototypes\Interfaces\JsonPrototypeInterface;
use App\Libs\Json\Prototypes\Prototypes\JsonPrototype;
class PropertySubLocationJsonPrototype extends JsonPrototype implements JsonPrototypeInterface
{
    public $id = "";
    public $location = "";
    public $cityId = "";
    public $lat = "";
    public $long = "";

}