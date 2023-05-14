<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ShopOfflineResource\Pages;
use App\Filament\Resources\ShopOfflineResource\RelationManagers;
use App\Models\ShopOffline;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ShopOfflineResource extends Resource
{
    protected static ?string $model = ShopOffline::class;

    protected static ?string $navigationLabel = 'Магазины Оффлайн';
    protected static ?string $navigationIcon = 'heroicon-o-collection';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()->schema([
                    Forms\Components\TextInput::make('title')
                        ->label('Название')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\TextInput::make('address')
                        ->label('Адрес')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\TextInput::make('hours')
                        ->label('Часы работы')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\TextInput::make('mobile')
                        ->label('Телефон')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\TextInput::make('site')
                        ->label('Сайт')
                        ->required()
                        ->maxLength(255),
                ])

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\TextColumn::make('address'),
                Tables\Columns\TextColumn::make('hours'),
                Tables\Columns\TextColumn::make('mobile'),
                Tables\Columns\TextColumn::make('site'),
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
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListShopOfflines::route('/'),
            'create' => Pages\CreateShopOffline::route('/create'),
            'edit' => Pages\EditShopOffline::route('/{record}/edit'),
        ];
    }
}
