<?php

namespace Modules\RealEstate\Filament\Clusters\RealEstate\Resources\Cities\Pages;

use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use Modules\RealEstate\Filament\Clusters\RealEstate\Resources\Cities\CityResource;

class ListCities extends ListRecords
{
    protected static string $resource = CityResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
