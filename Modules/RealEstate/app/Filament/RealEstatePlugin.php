<?php

namespace Modules\RealEstate\Filament;

use Coolsam\Modules\Concerns\ModuleFilamentPlugin;
use Filament\Contracts\Plugin;
use Filament\Panel;

class RealEstatePlugin implements Plugin
{
    use ModuleFilamentPlugin;

    public function getModuleName(): string
    {
        return 'RealEstate';
    }

    public function getId(): string
    {
        return 'realestate';
    }

    public function boot(Panel $panel): void
    {
        // TODO: Implement boot() method.
    }
}
