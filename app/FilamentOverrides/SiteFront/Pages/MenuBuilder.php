<?php

namespace App\FilamentOverrides\SiteFront\Pages;

use App\FilamentOverrides\SiteFront\MenuResource;
use Biostate\FilamentMenuBuilder\Filament\Resources\MenuResource\Pages\MenuBuilder as PagesMenuBuilder;

class MenuBuilder extends PagesMenuBuilder
{
    protected static string $resource = MenuResource::class;
}