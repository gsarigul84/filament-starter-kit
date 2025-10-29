<?php

namespace App\Providers\Filament;

use App\Filament\Pages\Dashboard;
use App\FilamentOverrides\Plugins\FilamentModuleManagerPlugin;
use App\FilamentOverrides\Plugins\FilamentThemeManagerPlugin;
use App\FilamentOverrides\SiteFront\MenuItemResource;
use App\FilamentOverrides\SiteFront\MenuResource;
use App\FilamentOverrides\System\BackupsPage;
use Awcodes\QuickCreate\QuickCreatePlugin;
use Awcodes\Recently\RecentlyPlugin;
use BezhanSalleh\FilamentShield\FilamentShieldPlugin;
use Alizharb\FilamentThemesManager\FilamentThemesManagerPlugin;
use Biostate\FilamentMenuBuilder\FilamentMenuBuilderPlugin;
use Coolsam\Modules\ModulesPlugin;
use CraftForge\FilamentLanguageSwitcher\FilamentLanguageSwitcherPlugin;
use DiscoveryDesign\FilamentGaze\FilamentGazePlugin;
use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\AuthenticateSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Navigation\NavigationBuilder;
use Filament\Navigation\NavigationGroup;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Filament\Support\Enums\Width;
use Filament\Widgets\AccountWidget;
use Filament\Widgets\FilamentInfoWidget;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Jeffgreco13\FilamentBreezy\BreezyCore;
use LaraZeus\Sky\Filament\Resources\SkyResource;
use LaraZeus\Sky\SkyPlugin;
use LaraZeus\SpatieTranslatable\SpatieTranslatablePlugin;
use Leandrocfe\FilamentApexCharts\FilamentApexChartsPlugin;
use Muazzam\SlickScrollbar\SlickScrollbarPlugin;
use ShuvroRoy\FilamentSpatieLaravelBackup\FilamentSpatieLaravelBackupPlugin;
use Swis\Filament\Backgrounds\FilamentBackgroundsPlugin;
use Yebor974\Filament\RenewPassword\RenewPasswordPlugin;

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('admin')
            ->path('admin')
            ->login()
            ->colors([
                'primary' => Color::Amber,
            ])
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\Filament\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\Filament\Pages')
            ->pages([
                Dashboard::class,
            ])
            ->maxContentWidth(Width::Full)
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\Filament\Widgets')
            ->widgets([
                AccountWidget::class,
                FilamentInfoWidget::class,
            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->authMiddleware([
                Authenticate::class,
            ])
            ->viteTheme('resources/css/filament/admin/theme.css')
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\\Filament\\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\\Filament\\Pages')
            ->discoverClusters(in: app_path('Filament/Clusters'), for: 'App\\Filament\\Clusters')

        ->plugins([
                FilamentShieldPlugin::make()
                    ->navigationLabel(__('translations.users.permission_management'))
                    ->navigationGroup(__('translations.user_management')),
                SlickScrollbarPlugin::make(),
                FilamentLanguageSwitcherPlugin::make()->locales([
                    ['code' => 'en', 'name' => 'English', 'flag' => 'gb'],
                    ['code' => 'tr', 'name' => 'Türkçe', 'flag' => 'tr'],
                ]),
                FilamentThemeManagerPlugin::make(),
                FilamentModuleManagerPlugin::make(),
                BreezyCore::make()->myProfile(
                    shouldRegisterUserMenu: true,
                    hasAvatars: false,
                ),
                FilamentBackgroundsPlugin::make(),
                FilamentMenuBuilderPlugin::make()
                    ->usingMenuResource(MenuResource::class)
                    ->usingMenuItemResource(MenuItemResource::class),
                RecentlyPlugin::make(),
                FilamentGazePlugin::make(),
                RenewPasswordPlugin::make(),
                FilamentApexChartsPlugin::make(),
                FilamentSpatieLaravelBackupPlugin::make()
                    ->usingPage(BackupsPage::class),
                QuickCreatePlugin::make(),
                SpatieTranslatablePlugin::make()->defaultLocales(config('scriptmancer.locales')),
                SkyPlugin::make()
                    ->navigationGroupLabel(__('translations.content')),
                ModulesPlugin::make()
            ])
            ->navigationGroups([
                NavigationGroup::make()
                    ->label(__('translations.content'))
                    ->collapsed(),
                NavigationGroup::make()
                    ->label(__('translations.user_management'))
                    ->collapsed(),
                NavigationGroup::make()
                    ->label(__('translations.site_front'))
                    ->collapsed(),
                NavigationGroup::make()
                    ->label(__('translations.system'))
                    ->collapsed(),
                NavigationGroup::make()
                    ->label(__('translations.modules'))
                    ->collapsed(),

            ]);

    }
}
