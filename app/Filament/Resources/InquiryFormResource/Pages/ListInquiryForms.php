<?php

namespace App\Filament\Resources\InquiryFormResource\Pages;

use App\Filament\Resources\InquiryFormResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListInquiryForms extends ListRecords
{
    protected static string $resource = InquiryFormResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
