<?php

namespace App\Filament\Resources\ConsultTopicResource\Pages;

use App\Filament\Resources\ConsultTopicResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageConsultTopics extends ManageRecords
{
    protected static string $resource = ConsultTopicResource::class;
    protected static ?string $title = 'Темы консультаций';

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
