<?php

namespace App\Filament\Resources\GrowthStatusResource\Pages;

use App\Filament\Resources\GrowthStatusResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditGrowthStatus extends EditRecord
{
    protected static string $resource = GrowthStatusResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
