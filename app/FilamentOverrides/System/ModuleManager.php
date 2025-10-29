<?php

namespace App\FilamentOverrides\System;

use Alizharb\FilamentModuleManager\Pages\ModuleManager as BaseModuleManager;
use App\Filament\Clusters\System\SystemCluster;

class ModuleManager extends BaseModuleManager
{
    protected static ?string $cluster = SystemCluster::class;
}
