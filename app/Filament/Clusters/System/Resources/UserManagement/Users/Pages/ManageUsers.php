<?php

namespace App\Filament\Clusters\System\Resources\UserManagement\Users\Pages;

use App\Filament\Clusters\System\Resources\UserManagement\Users\UserResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ManageRecords;

class ManageUsers extends ManageRecords
{
    protected static string $resource = UserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
