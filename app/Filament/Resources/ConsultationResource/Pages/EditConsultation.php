<?php

namespace App\Filament\Resources\ConsultationResource\Pages;

use App\Filament\Resources\ConsultationResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditConsultation extends EditRecord
{
    protected static string $resource = ConsultationResource::class;
    protected static ?string $title = 'Консультация';

    protected function getActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
