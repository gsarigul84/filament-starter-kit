<?php

namespace App\FilamentOverrides\SiteFront\Pages;


use App\FilamentOverrides\SiteFront\MenuItemResource;
use Biostate\FilamentMenuBuilder\Filament\Resources\MenuItemResource\Pages\ListMenuItems as PagesListMenuItems;

class ListMenuItems extends PagesListMenuItems
{
    protected static string $resource = MenuItemResource::class;
}