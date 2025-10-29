<?php

namespace App\FilamentOverrides\System;

use App\Filament\Clusters\System\SystemCluster;
use ShuvroRoy\FilamentSpatieLaravelBackup\Pages\Backups;

class BackupsPage extends Backups
{
    protected static ?string $cluster = SystemCluster::class;
    public static function getNavigationGroup(): ?string
    {
        return __('translations.system');
    }

}
