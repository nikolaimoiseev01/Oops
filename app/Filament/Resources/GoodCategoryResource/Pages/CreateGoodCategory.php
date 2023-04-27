<?php

namespace App\Filament\Resources\GoodCategoryResource\Pages;

use App\Filament\Resources\GoodCategoryResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateGoodCategory extends CreateRecord
{
    protected static ?string $title = 'Создать категорию товара';
    protected static string $resource = GoodCategoryResource::class;


}
