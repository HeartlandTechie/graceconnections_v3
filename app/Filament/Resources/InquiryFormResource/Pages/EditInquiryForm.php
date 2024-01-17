<?php

namespace App\Filament\Resources\InquiryFormResource\Pages;

use App\Filament\Resources\InquiryFormResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditInquiryForm extends EditRecord
{
    protected static string $resource = InquiryFormResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
