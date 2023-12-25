<?php

namespace App\Filament\Resources\StudyNoteResource\Pages;

use App\Filament\Resources\StudyNoteResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListStudyNotes extends ListRecords
{
    protected static string $resource = StudyNoteResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
