<?php

namespace App\Filament\Resources\ShopOfflineResource\Pages;

use App\Filament\Resources\ShopOfflineResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListShopOfflines extends ListRecords
{
    protected static string $resource = ShopOfflineResource::class;

    protected static ?string $title = 'Магазины';

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
