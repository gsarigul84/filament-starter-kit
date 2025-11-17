<?php

namespace App\FilamentOverrides\SiteFront\Pages;

use App\FilamentOverrides\SiteFront\MenuItemResource;
use Biostate\FilamentMenuBuilder\Filament\Resources\MenuItemResource\Pages\EditMenuItem as PagesEditMenuItem;

class EditMenuItem extends PagesEditMenuItem
{
    protected static string $resource = MenuItemResource::class;
}