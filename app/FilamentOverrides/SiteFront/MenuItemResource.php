<?php

namespace App\FilamentOverrides\SiteFront;

use Biostate\FilamentMenuBuilder\Filament\Resources\MenuItemResource as BaseMenuItemResource;
use Illuminate\Support\Facades\Lang;

class MenuItemResource extends BaseMenuItemResource
{
    public static function getNavigationGroup(): ?string
    {
        return __('translations.site_front');
    }


}
