<?php

namespace Modules\RealEstate\Filament\Clusters\RealEstate;

use BackedEnum;
use Filament\Clusters\Cluster;
use Filament\Support\Enums\Width;
use Filament\Support\Icons\Heroicon;

class RealEstateCluster extends Cluster
{
    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedSquares2x2;

}
