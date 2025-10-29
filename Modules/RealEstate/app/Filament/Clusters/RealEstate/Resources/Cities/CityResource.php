<?php

namespace Modules\RealEstate\Filament\Clusters\RealEstate\Resources\Cities;

use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Modules\RealEstate\Filament\Clusters\RealEstate\RealEstateCluster;
use Modules\RealEstate\Filament\Clusters\RealEstate\Resources\Cities\Pages\CreateCity;
use Modules\RealEstate\Filament\Clusters\RealEstate\Resources\Cities\Pages\EditCity;
use Modules\RealEstate\Filament\Clusters\RealEstate\Resources\Cities\Pages\ListCities;
use Modules\RealEstate\Filament\Clusters\RealEstate\Resources\Cities\Schemas\CityForm;
use Modules\RealEstate\Filament\Clusters\RealEstate\Resources\Cities\Tables\CitiesTable;
use Modules\RealEstate\Models\City;

class CityResource extends Resource
{
    protected static ?string $model = City::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $cluster = RealEstateCluster::class;

    protected static ?string $recordTitleAttribute = 'city_name';

    public static function form(Schema $schema): Schema
    {
        return CityForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return CitiesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListCities::route('/'),
            'create' => CreateCity::route('/create'),
            'edit' => EditCity::route('/{record}/edit'),
        ];
    }

    public static function getRecordRouteBindingEloquentQuery(): Builder
    {
        return parent::getRecordRouteBindingEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
