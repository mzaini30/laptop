<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EmailDatabaseResource\Pages;
use App\Filament\Resources\EmailDatabaseResource\RelationManagers;
use App\Models\EmailDatabase;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EmailDatabaseResource extends Resource
{
    protected static ?string $model = EmailDatabase::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make("email")->searchable()->sortable(),
                TextColumn::make("platform")->searchable()->sortable()
            ])
            ->filters([
                SelectFilter::make("platform")->searchable()
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListEmailDatabases::route('/'),
            'create' => Pages\CreateEmailDatabase::route('/create'),
            'edit' => Pages\EditEmailDatabase::route('/{record}/edit'),
        ];
    }
}
