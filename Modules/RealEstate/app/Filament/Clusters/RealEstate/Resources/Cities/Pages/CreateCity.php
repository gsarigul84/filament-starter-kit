<?php

namespace Modules\RealEstate\Filament\Clusters\RealEstate\Resources\Cities\Pages;

use Filament\Resources\Pages\CreateRecord;
use Modules\RealEstate\Filament\Clusters\RealEstate\Resources\Cities\CityResource;

class CreateCity extends CreateRecord
{
    protected static string $resource = CityResource::class;
}
