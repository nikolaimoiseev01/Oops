<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ConsultStatusResource\Pages;
use App\Filament\Resources\ConsultStatusResource\RelationManagers;
use App\Models\ConsultStatus;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ConsultStatusResource extends Resource
{
    protected static ?string $model = ConsultStatus::class;
    protected static ?string $navigationLabel = 'Статусы';
    protected static ?string $navigationGroup = 'Консультации';
    protected static ?string $title = 'Статусы консультаций';

    protected static ?string $navigationIcon = 'heroicon-o-filter';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->label('Название'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')->label('Название'),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Создан')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Обновлен')
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
            'index' => Pages\ManageConsultStatuses::route('/'),
        ];
    }
}
