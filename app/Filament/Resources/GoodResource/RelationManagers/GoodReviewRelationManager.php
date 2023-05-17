<?php

namespace App\Filament\Resources\GoodResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Resources\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class GoodReviewRelationManager extends RelationManager
{
    protected static string $relationship = 'GoodReview';
    protected static ?string $title = 'Отзывы';
    protected static ?string $recordTitleAttribute = 'user_name';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('shop')
                    ->label('Магазин')
                    ->options([
                        'ozon' => 'Ozon',
                        'wb' => 'Wildberries',
                    ]),
                Forms\Components\TextInput::make('user_name')
                    ->label('Пользователь')
                    ->required(),
                DatePicker::make('date')
                    ->label('Дата')
                    ->required(),
                Select::make('rating')
                    ->label('Рейтинг')
                    ->options([
                        1 => 1,
                        2 => 2,
                        3 => 3,
                        4 => 4,
                        5 => 5,
                    ]),
                Forms\Components\Textarea::make('text')
                    ->label('Текст')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user_name')->label('Пользователь'),
                Tables\Columns\TextColumn::make('shop')->label('Магазин'),
                Tables\Columns\TextColumn::make('date')->label('Дата'),
                Tables\Columns\TextColumn::make('rating')->label('Рейтинг'),
                Tables\Columns\TextColumn::make('text')->limit(20)->label('Текст'),
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
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
}
