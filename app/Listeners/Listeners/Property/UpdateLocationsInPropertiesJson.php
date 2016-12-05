<?php

namespace App\Listeners\Listeners\Property;

use App\DB\Providers\SQL\Factories\Factories\PropertyJson\PropertyJsonFactory;
use App\Events\Events\Property\PropertiesLocationChanged;
use App\Events\Events\Property\PropertyCreated;
use App\Events\Events\Property\PropertyDeleted;
use App\Listeners\Interfaces\ListenerInterface;
use App\Listeners\Listeners\Listener;
use App\Repositories\Providers\Providers\LocationsRepoProvider;
use App\Repositories\Repositories\Sql\PropertiesJsonRepository;

class UpdateLocationsInPropertiesJson extends Listener implements ListenerInterface
{
    private $propertiesJsonRepository = null;
    private $locations=null;

    public function __construct()
    {
        $this->propertiesJsonRepository = new PropertiesJsonRepository();
        $this->locations = (new LocationsRepoProvider())->repo();
    }

    public function handle(PropertiesLocationChanged $event)
    {
        $this->locations->getlocationsPropertiesJsons($event->propertyStatusId);
    }
}
