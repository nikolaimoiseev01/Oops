<?php

namespace App\Filament\Resources\GoodPropNameResource\Pages;

use App\Filament\Resources\GoodPropNameResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageGoodPropNames extends ManageRecords
{
    protected static string $resource = GoodPropNameResource::class;

    protected static ?string $title = 'Названия свойств товара';

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
