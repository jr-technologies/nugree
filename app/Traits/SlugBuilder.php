<?php
/**
 * Created by PhpStorm.
 * User: waqas
 * Date: 2/25/2016
 * Time: 3:28 PM
 */

namespace App\Traits;

use App\DB\Providers\SQL\Models\Property;
use App\Libs\Json\Prototypes\Prototypes\Property\PropertyJsonPrototype;


trait SlugBuilder
{
    use AppTrait;

    public function propertySlug(PropertyJsonPrototype $property)
    {
        $slug = ''.$property->land->area.'-'.$property->land->unit->name .'-'.$property->type->subType->name.'-'. $property->purpose->name.'-in'.$property->location->location->location.'-'.$property->location->city->name.'-'.$property->id;
        return str_replace('--','-',preg_replace('/\s+/', '-',$slug));
    }
}