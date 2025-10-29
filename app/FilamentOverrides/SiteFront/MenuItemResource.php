<?php

namespace App\FilamentOverrides\SiteFront;

use App\Filament\Clusters\System\SystemCluster;
use Biostate\FilamentMenuBuilder\Filament\Resources\MenuItemResource as BaseMenuItemResource;


class MenuItemResource extends BaseMenuItemResource
{
    protected static ?string $cluster = SystemCluster::class;

    public static function getNavigationGroup(): ?string
    {
        return __('translations.site_front');
    }


}
