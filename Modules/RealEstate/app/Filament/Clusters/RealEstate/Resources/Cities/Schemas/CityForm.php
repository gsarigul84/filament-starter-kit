<?php

namespace Modules\RealEstate\Filament\Clusters\RealEstate\Resources\Cities\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class CityForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('city_name')
                    ->required(),
            ]);
    }
}
