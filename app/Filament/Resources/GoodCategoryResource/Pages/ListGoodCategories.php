<?php

namespace App\Filament\Resources\GoodCategoryResource\Pages;

use App\Filament\Resources\GoodCategoryResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListGoodCategories extends ListRecords
{
    protected static string $resource = GoodCategoryResource::class;
    protected static ?string $title = 'Категории товара';

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
