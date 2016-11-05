Route::get('test',function(){

$propertiesLocation = [];
$propertyRepo = (new \App\Repositories\Providers\Providers\PropertiesRepoProvider())->repo();
$locationRepo = (new \App\Repositories\Providers\Providers\LocationsRepoProvider())->repo();
$propertyTable = 'properties';
$locationTable = 'locations';

$propertiesLocations[] = DB::table($propertyTable)
->leftjoin($locationTable,$propertyTable.'.location_id','=',$locationTable.'.id')
->select($locationTable.'.id',$locationTable.'.location')
->distinct()
->get();
$collectedPropertyLocationIds = [];

foreach($propertiesLocations[0] as $propertyLocation)
{
$collectedPropertyLocationIds[]= $propertyLocation->id;
}

$locations =[];
$locations[]= DB::table($locationTable)
->select(DB::raw("count($locationTable.location) as locationCount,$locationTable.location"))
->groupBy($locationTable.'.location')
->having('locationCount', '>', 1)
->get();
$rawLocation= [];

foreach($locations[0] as $location){

$rawLocation[] = $location->location;
}

$locationIds = DB::table($locationTable)
->select($locationTable.'.id')
->whereIn($locationTable.'.location', $rawLocation)
->get();
$finalLocationIds = [];
foreach($collectedPropertyLocationIds as $collectedPropertyLocationId)
{
foreach($locationIds as $locationId){
if(($locationId->id) != $collectedPropertyLocationId)
{
if(!in_array($locationId->id, $finalLocationIds)){
$finalLocationIds[] = $locationId->id;
}
}
}
}

$locations =[];
$locations[]= DB::table($locationTable)
->select(DB::raw("count($locationTable.location) as locationCount,$locationTable.id as location_id"))
->groupBy($locationTable.'.location')
->having('locationCount', '>', 1)
->whereIn('locations.id', $finalLocationIds)
->get();

$deleteLocationIds =[];
foreach($locations[0] as $location)
{
$deleteLocationIds[]= $location->location_id;
}

DB::table($locationTable)
->whereIn($locationTable.'.id',$deleteLocationIds)
->where($locationTable.'.city_id','=',1)
->delete();
dd('Records Are Deleted');
});

