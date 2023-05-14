<?php

namespace App\Filament\Resources\GoodCategoryResource\Pages;

use App\Filament\Resources\GoodCategoryResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditGoodCategory extends EditRecord
{
    protected static string $resource = GoodCategoryResource::class;
    protected static ?string $title = 'Редактирование категории товара';

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

}
