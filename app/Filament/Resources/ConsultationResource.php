<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ConsultationResource\Pages;
use App\Filament\Resources\ConsultationResource\RelationManagers;
use App\Models\Consultation;
use Filament\Forms;
use Filament\Forms\Components\BelongsToSelect;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\SelectColumn;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Tables\Columns\TextInputColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ConsultationResource extends Resource
{
    protected static ?string $model = Consultation::class;
    protected static ?string $navigationLabel = 'Консультации';
    protected static ?string $title = 'Консультации';
    protected static ?string $navigationIcon = 'heroicon-o-chat';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()->schema([
                    Grid::make()
                        ->schema([
                            Forms\Components\TextInput::make('topic')
                                ->label('Тема')
                                ->disabled(),
                            Forms\Components\TextInput::make('user_name')
                                ->label('ФИО')
                                ->disabled(),
                            Forms\Components\TextInput::make('user_mobile')
                                ->label('Телефон')
                                ->disabled(),
                        ])->columns(3),
                    Forms\Components\Textarea::make('user_text')
                        ->label('Вопрос')
                        ->disabled(),
                    Forms\Components\Textarea::make('comment')
                        ->label('Свой комментарий'),
                    BelongsToSelect::make('consult_status_id')
                        ->required()
                        ->label('Статус')
                        ->relationship('ConsultStatus', 'title'),
                ])

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('topic')->label('Тема'),
                Tables\Columns\TextColumn::make('ConsultStatus.title'),
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

    public static function canCreate(): bool
    {
        return false;
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListConsultations::route('/'),
//            'create' => Pages\CreateConsultation::route('/create'),
//            'view' => Pages\ViewConsultation::route('/{record}'),
            'edit' => Pages\EditConsultation::route('/{record}/edit'),
        ];
    }
}
