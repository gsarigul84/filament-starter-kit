<?php

namespace App\FilamentOverrides\SiteFront;
use Biostate\FilamentMenuBuilder\Filament\Resources\MenuResource as BaseMenuResource;

class MenuResource extends BaseMenuResource
{
    public static function getNavigationGroup(): ?string
    {
      return __('translations.site_front');
    }


}
