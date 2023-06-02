<?php

namespace App\Filament\Resources\ConsultStatusResource\Pages;

use App\Filament\Resources\ConsultStatusResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageConsultStatuses extends ManageRecords
{
    protected static string $resource = ConsultStatusResource::class;
    protected static ?string $title = 'Статусы консультаций';

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
