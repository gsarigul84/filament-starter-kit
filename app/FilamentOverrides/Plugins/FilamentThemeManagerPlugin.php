<?php

namespace App\FilamentOverrides\Plugins;

use Alizharb\FilamentThemesManager\FilamentThemesManagerPlugin;
use App\FilamentOverrides\System\ThemeManager;
use Filament\Panel;

class FilamentThemeManagerPlugin extends FilamentThemesManagerPlugin
{
    public function register(Panel $panel): void
    {
        $panel
            ->pages([
                ThemeManager::class ,
            ]);

        if (config('filament-themes-manager.widgets.enabled', true)) {
            $panel->widgets(
                config('filament-themes-manager.widgets.widgets', [])
            );
        }
    }

}
