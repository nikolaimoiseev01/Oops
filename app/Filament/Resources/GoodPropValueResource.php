<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GoodPropValueResource\Pages;
use App\Filament\Resources\GoodPropValueResource\RelationManagers;
use App\Models\GoodPropValue;
use Filament\Forms;
use Filament\Forms\Components\BelongsToSelect;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Filters\Layout;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class GoodPropValueResource extends Resource
{
    protected static ?string $model = GoodPropValue::class;
    protected static ?string $navigationLabel = 'Значения свойств';
    protected static ?string $navigationGroup = 'Товары';
    protected static ?string $navigationIcon = 'heroicon-o-filter';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                BelongsToSelect::make('good_prop_name_id')
                    ->label('Название свойства')
                    ->required()
                    ->relationship('GoodPropName', 'title'),
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->label('Название')
                    ->maxLength(255),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('GoodPropName.title')
                    ->searchable()
                    ->label('Свойство'),
                Tables\Columns\TextColumn::make('title')
                    ->searchable()
                    ->label('Название'),
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
            'index' => Pages\ManageGoodPropValues::route('/'),
        ];
    }
}
