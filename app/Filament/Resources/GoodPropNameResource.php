<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GoodPropNameResource\Pages;
use App\Filament\Resources\GoodPropNameResource\RelationManagers;
use App\Models\GoodPropName;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class GoodPropNameResource extends Resource
{
    protected static ?string $model = GoodPropName::class;

    protected static ?string $navigationLabel = 'Названия свойств';
    protected static ?string $navigationGroup = 'Товары';

    protected static ?string $navigationIcon = 'heroicon-o-filter';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                    Forms\Components\TextInput::make('title')
                        ->required()
                        ->label('Название')
                        ->maxLength(255)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')->label('Название'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageGoodPropNames::route('/'),
        ];
    }
}
