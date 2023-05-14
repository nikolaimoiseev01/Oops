<?php

namespace App\Filament\Resources\GoodResource\Pages;

use App\Filament\Resources\GoodResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateGood extends CreateRecord
{
    protected static ?string $title = 'Создать товар';
    protected static string $resource = GoodResource::class;
}
