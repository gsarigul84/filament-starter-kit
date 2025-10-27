<?php

namespace App\FilamentOverrides\System;

use ShuvroRoy\FilamentSpatieLaravelBackup\Pages\Backups;

class BackupsPage extends Backups
{

    public static function getNavigationGroup(): ?string
    {
        return __('translations.system');
    }

}
