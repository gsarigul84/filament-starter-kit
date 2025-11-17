<?php

namespace App\FilamentOverrides\SiteFront\Pages;

use App\FilamentOverrides\SiteFront\MenuResource;
use Biostate\FilamentMenuBuilder\Filament\Resources\MenuResource\Pages\EditMenu as PagesEditMenu;

class EditMenu extends PagesEditMenu
{
    protected static string $resource = MenuResource::class;
}