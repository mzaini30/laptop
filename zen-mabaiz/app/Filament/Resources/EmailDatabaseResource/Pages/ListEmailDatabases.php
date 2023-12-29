<?php

namespace App\Filament\Resources\EmailDatabaseResource\Pages;

use App\Filament\Resources\EmailDatabaseResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListEmailDatabases extends ListRecords
{
    protected static string $resource = EmailDatabaseResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
