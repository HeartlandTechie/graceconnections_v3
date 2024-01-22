<?php

namespace App\Filament\Resources;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use App\Filament\Exports\PersonExporter;
use App\Filament\Resources\PersonResource\Pages;
use App\Filament\Resources\PersonResource\RelationManagers;
use App\Models\Person;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Infolists\Components\TextEntry;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\ExportBulkAction;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PersonResource extends Resource
{
    protected static ?string $model = Person::class;

    protected static ?string $navigationIcon = 'heroicon-o-user';
    protected static ?string $navigationGroup = 'Our Church';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('first')
                    ->maxLength(100),
                Forms\Components\TextInput::make('middle')
                    ->maxLength(100),
                Forms\Components\TextInput::make('last')
                    ->maxLength(100),
                Forms\Components\TextInput::make('nickname')
                    ->maxLength(100),
                Forms\Components\TextInput::make('gender')
                    ->maxLength(1),
                Forms\Components\DatePicker::make('date_of_birth'),
                Forms\Components\Textarea::make('notes')
                    ->maxLength(65535)
                    ->columnSpanFull(),
                Forms\Components\Select::make('growth')
                    ->relationship('growthstatus', 'name')
                    ->label('Growth')
                    ->multiple()
                    ->preload()
                    ->searchable(),
                Select::make('address_id')
                    ->relationship(name: 'address', titleAttribute: 'address_1')
                    ->createOptionForm([
                        Forms\Components\TextInput::make('address_1'),
                        Forms\Components\Textarea::make('address_2'),
                        Forms\Components\Textarea::make('city'),
                        Forms\Components\Textarea::make('state'),
                        Forms\Components\Textarea::make('zipcode')
                    ]),


            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('first')
                    ->searchable(),
                Tables\Columns\TextColumn::make('last')
                    ->searchable(),
                Tables\Columns\TextColumn::make('address.fulladdress')
                    ->searchable(),
                Tables\Columns\TextColumn::make('date_of_birth')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    ExportBulkAction::make()
                        ->exporter(PersonExporter::class)
                ]),

            ]);
    }



    public static function getRelations(): array
    {
        return [
            RelationManagers\AddressRelationManager::class
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPeople::route('/'),
            'create' => Pages\CreatePerson::route('/create'),
            'edit' => Pages\EditPerson::route('/{record}/edit'),
        ];
    }
}
