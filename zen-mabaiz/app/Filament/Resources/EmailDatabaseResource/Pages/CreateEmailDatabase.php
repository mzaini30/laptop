<?php

namespace App\Filament\Resources\EmailDatabaseResource\Pages;

use App\Filament\Resources\EmailDatabaseResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateEmailDatabase extends CreateRecord
{
    protected static string $resource = EmailDatabaseResource::class;
}
