<?php

namespace App\FilamentOverrides\Plugins;

use Alizharb\FilamentModuleManager\FilamentModuleManagerPlugin as BaseFilamentModuleManagerPlugin;

use App\FilamentOverrides\System\ModuleManager;
use Filament\Panel;

class FilamentModuleManagerPlugin extends BaseFilamentModuleManagerPlugin
{
    public function register(Panel $panel): void
    {
        $panel
            ->pages([
                ModuleManager::class
            ]);

        if (config('filament-module-manager.widgets.enabled', true)) {
            $panel->widgets(
                config('filament-module-manager.widgets.widgets', [])
            );
        }
    }
}
