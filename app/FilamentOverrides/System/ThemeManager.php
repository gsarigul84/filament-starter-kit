<?php

namespace App\FilamentOverrides\System;

use Alizharb\FilamentThemesManager\Pages\ThemeManager as BaseThemeManager;
use App\Filament\Clusters\System\SystemCluster;

class ThemeManager extends BaseThemeManager
{
    protected static ?string $cluster = SystemCluster::class;
}
