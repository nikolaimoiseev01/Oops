<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GoodCategoryResource\Pages;
use App\Filament\Resources\GoodCategoryResource\RelationManagers;
use App\Models\GoodCategory;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class GoodCategoryResource extends Resource
{
    protected static ?string $model = GoodCategory::class;
    protected static ?string $navigationLabel = 'Категории';
    protected static ?string $navigationGroup = 'Товары';
    protected static ?string $navigationIcon = 'heroicon-o-information-circle';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()->schema([
                    Forms\Components\TextInput::make('title')
                        ->required()
                        ->label('Название')
                        ->maxLength(255),
                    SpatieMediaLibraryFileUpload::make('good_cat_pic')
                        ->collection('good_cat_pics')
                        ->required()
                        ->label('Изображение (png|jpg)')
                        ->image()
                ])
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
                SpatieMediaLibraryImageColumn::make('good_cat_pic')->collection('good_cat_pics'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->reorderable('position')
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ])->defaultSort('position', 'asc');
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
            'index' => Pages\ListGoodCategories::route('/'),
            'create' => Pages\CreateGoodCategory::route('/create'),
            'edit' => Pages\EditGoodCategory::route('/{record}/edit'),
        ];
    }
}
