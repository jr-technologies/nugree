<?php

namespace App\Events\Events\Property;

use App\DB\Providers\SQL\Models\Property;
use App\Events\Events\Event;
use Illuminate\Queue\SerializesModels;

class PropertiesLocationChanged extends Event
{
    use SerializesModels;


    public function __construct($propertyLocationId)
    {
        $this->propertyStatusId = $propertyLocationId;
    }

    /**
     * Get the channels the event should be broadcast on.
     *
     * @return array
     */
    public function broadcastOn()
    {
        return [];
    }
}
