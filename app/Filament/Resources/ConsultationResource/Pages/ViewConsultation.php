<?php

namespace App\Filament\Resources\ConsultationResource\Pages;

use App\Filament\Resources\ConsultationResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewConsultation extends ViewRecord
{
    protected static string $resource = ConsultationResource::class;

    protected function getActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
