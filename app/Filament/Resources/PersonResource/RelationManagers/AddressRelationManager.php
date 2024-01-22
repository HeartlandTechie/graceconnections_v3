<?php

namespace App\Filament\Resources\PersonResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AddressRelationManager extends RelationManager
{
    protected static string $relationship = 'address';

    public function form(Form $form): Form
    {
        return $form
            ->schema([

                Forms\Components\Textarea::make('address_1')
                    ->maxLength(65535)
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('address_2')
                    ->maxLength(65535)
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('city')
                    ->maxLength(65535),

                Forms\Components\Textarea::make('state')
                    ->maxLength(65535),

                Forms\Components\Textarea::make('zipcode')
                    ->maxLength(65535),

            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('address_1')
            ->columns([
                Tables\Columns\TextColumn::make('address_1'),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}
