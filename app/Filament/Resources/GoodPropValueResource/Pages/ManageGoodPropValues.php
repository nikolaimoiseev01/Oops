<?php

namespace App\Filament\Resources\GoodPropValueResource\Pages;

use App\Filament\Resources\GoodPropValueResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageGoodPropValues extends ManageRecords
{
    protected static string $resource = GoodPropValueResource::class;
    protected static ?string $title = 'Значения свойств товара';

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
