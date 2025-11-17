<?php

namespace App\FilamentOverrides\SiteFront\Pages;

use App\FilamentOverrides\SiteFront\MenuResource;
use Biostate\FilamentMenuBuilder\Filament\Resources\MenuResource\Pages\ListMenus as PagesListMenus;

class ListMenus extends PagesListMenus
{
    protected static string $resource = MenuResource::class;
}