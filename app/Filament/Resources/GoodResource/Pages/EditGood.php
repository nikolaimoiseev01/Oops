<?php

namespace App\Filament\Resources\GoodResource\Pages;

use App\Filament\Resources\GoodResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditGood extends EditRecord
{
    protected static string $resource = GoodResource::class;
    protected static ?string $title = 'Редактирование товара';

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
