<?php

namespace App\Filament\Resources\StudyNoteResource\Pages;

use App\Filament\Resources\StudyNoteResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditStudyNote extends EditRecord
{
    protected static string $resource = StudyNoteResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
