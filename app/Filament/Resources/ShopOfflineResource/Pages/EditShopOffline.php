<?php

namespace App\Filament\Resources\ShopOfflineResource\Pages;

use App\Filament\Resources\ShopOfflineResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditShopOffline extends EditRecord
{
    protected static string $resource = ShopOfflineResource::class;
    protected static ?string $title = 'Редактирование магазина';


    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
