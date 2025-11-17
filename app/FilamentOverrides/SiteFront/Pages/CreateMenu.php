<?php

namespace App\FilamentOverrides\SiteFront\Pages;

use App\FilamentOverrides\SiteFront\MenuResource;
use Biostate\FilamentMenuBuilder\Filament\Resources\MenuResource\Pages\CreateMenu as PagesCreateMenu;

class CreateMenu extends PagesCreateMenu
{
    protected static string $resource = MenuResource::class;
}