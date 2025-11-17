<?php

namespace App\FilamentOverrides\SiteFront;
use App\Filament\Clusters\System\SystemCluster;
use App\FilamentOverrides\SiteFront\Pages\CreateMenu;
use App\FilamentOverrides\SiteFront\Pages\EditMenu;
use App\FilamentOverrides\SiteFront\Pages\ListMenus;
use App\FilamentOverrides\SiteFront\Pages\MenuBuilder;
use Biostate\FilamentMenuBuilder\Filament\Resources\MenuResource as BaseMenuResource;


class MenuResource extends BaseMenuResource
{
    protected static ?string $cluster = SystemCluster::class;

    public static function getNavigationGroup(): ?string
    {
      return __('translations.site_front');
    }

    public static function getPages(): array
    {

        return [
            'index' => ListMenus::route('/'),
            'create' => CreateMenu::route('/create'),
            'edit' => EditMenu::route('/{record}/edit'),
            'build' => MenuBuilder::route('/{record}/build'),
        ];
    }

}
