<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GoodResource\Pages;
use App\Filament\Resources\GoodResource\RelationManagers;
use App\Filament\Resources\GoodResource\Widgets\GoodsOverview;
use App\Models\Good;
use App\Models\GoodPropName;
use App\Models\GoodPropValue;
use App\Models\User;
use Awcodes\FilamentTableRepeater\Components\TableRepeater;
use Filament\Forms;
use Filament\Forms\Components\BelongsToSelect;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\KeyValue;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class GoodResource extends Resource
{
    protected static ?string $model = Good::class;
    protected static ?string $navigationLabel = 'Товары';
    protected static ?string $navigationGroup = 'Товары';
    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()->schema([
                    Grid::make()
                        ->schema([
                            Forms\Components\TextInput::make('title')
                                ->required()
                                ->label('Название')
                                ->maxLength(255),
                            BelongsToSelect::make('good_category_id')
                                ->label('Категория')
                                ->relationship('GoodCategory', 'title'),
                        ]),
                    SpatieMediaLibraryFileUpload::make('good_examples')
                        ->collection('good_examples')
                        ->required()
                        ->multiple()
                        ->label('Примеры (png|jpg)')
                        ->enableReordering('order_column')
                        ->image(),
//                    KeyValue::make('properties')
//                        ->label('Свойства')
//                        ->keyLabel('Свойство')
//                        ->valueLabel('Значение')
//                        ->keyPlaceholder('Свойство')
//                        ->valuePlaceholder('Значение'),
                    TableRepeater::make('properties')
                        ->schema([
                            Select::make('Свойство')
                                ->disableLabel()
                                ->required()
                                ->options(GoodPropName::all()->pluck('title', 'id'))
                                ->searchable()
                                ->reactive(),
                            Select::make('Значение')
                                ->disableLabel()
                                ->required()
                                ->options(function (callable $get) {
                                    $good_prop_name = GoodPropName::where('id', $get('Свойство'))->first();

                                    if ($good_prop_name) {
//                                        dd($get('good_prop_name'));
                                        return GoodPropValue::where('good_prop_name_id', $get('Свойство') ?? 0)->pluck('title', 'id');
                                    } else {

                                        return null;

                                    }


                                })
                                ->searchable(),
                        ])

                        ->createItemButtonLabel('Добавить свойство')
                        ->label('Свойства')
                        ->columnSpan('full'),
                    TagsInput::make('advantages')
                        ->label('Преимущества'),
                    Forms\Components\Textarea::make('desc')
                        ->required()
                        ->label('Описание')
                        ->maxLength(65535),
                    Forms\Components\Textarea::make('compound')
                        ->required()
                        ->label('Состав')
                        ->maxLength(255),
                    Forms\Components\Textarea::make('instruction')
                        ->required()
                        ->label('Инструкция')
                        ->maxLength(255),
                    Grid::make()
                        ->schema([
                            Forms\Components\TextInput::make('capacity')
                                ->label('Объем')
                                ->required(),
                            Forms\Components\TextInput::make('capacity_type')
                                ->required()
                                ->label('Тип объема')
                                ->maxLength(255),
                        ]),

                    KeyValue::make('links')
                        ->label('Ссылки')
                        ->keyLabel('Площадка')
                        ->valueLabel('Ссылка')
                        ->keyPlaceholder('Площадка')
                        ->valuePlaceholder('Ссылка'),
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->label('Название')
                    ->searchable(),
                Tables\Columns\TextColumn::make('GoodCategory.title')
                    ->searchable()
                    ->label('Категория'),
                Tables\Columns\TextColumn::make('capacity')
                    ->searchable()
                    ->label('Объем'),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Создан')
                    ->dateTime('d M Y H:i'),
                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Обновлен')
                    ->dateTime('d M Y H:i'),
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
            RelationManagers\GoodReviewRelationManager::class
        ];
    }

    public static function getWidgets(): array
    {
        return [
            GoodsOverview::class,
        ];

    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListGoods::route('/'),
            'create' => Pages\CreateGood::route('/create'),
            'edit' => Pages\EditGood::route('/{record}/edit'),
        ];
    }
}
