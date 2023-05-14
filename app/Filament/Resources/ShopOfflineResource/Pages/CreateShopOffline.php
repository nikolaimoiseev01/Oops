<?php

namespace App\Filament\Resources\ShopOfflineResource\Pages;

use App\Filament\Resources\ShopOfflineResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateShopOffline extends CreateRecord
{
    protected static ?string $title = 'Создать магазин';
    protected static string $resource = ShopOfflineResource::class;
}
