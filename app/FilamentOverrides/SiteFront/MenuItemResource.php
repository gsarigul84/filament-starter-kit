<?php

namespace App\FilamentOverrides\SiteFront;

use App\Filament\Clusters\System\SystemCluster;
use App\FilamentOverrides\SiteFront\Pages\CreateMenuItem;
use App\FilamentOverrides\SiteFront\Pages\EditMenuItem;
use App\FilamentOverrides\SiteFront\Pages\ListMenuItems;
use Biostate\FilamentMenuBuilder\Filament\Resources\MenuItemResource as BaseMenuItemResource;


class MenuItemResource extends BaseMenuItemResource
{
    protected static ?string $cluster = SystemCluster::class;
    protected static bool $shouldRegisterNavigation = false;
    public static function getNavigationGroup(): ?string
    {
        return __('translations.site_front');
    }

    public static function getPages(): array
    {
        return [
            'index'  => ListMenuItems::route('/'),
            'create' => CreateMenuItem::route('/create'),
            'edit'   => EditMenuItem::route('/{record}/edit'),
        ];
    }


}
