<?php

namespace App\FilamentOverrides\SiteFront\Pages;

use App\FilamentOverrides\SiteFront\MenuItemResource;
use Biostate\FilamentMenuBuilder\Filament\Resources\MenuItemResource\Pages\CreateMenuItem as PagesCreateMenuItem;

class CreateMenuItem extends PagesCreateMenuItem
{
    protected static string $resource = MenuItemResource::class;
}