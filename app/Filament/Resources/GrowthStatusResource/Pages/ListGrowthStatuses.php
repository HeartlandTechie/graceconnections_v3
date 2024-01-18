<?php

namespace App\Filament\Resources\GrowthStatusResource\Pages;

use App\Filament\Resources\GrowthStatusResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListGrowthStatuses extends ListRecords
{
    protected static string $resource = GrowthStatusResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
