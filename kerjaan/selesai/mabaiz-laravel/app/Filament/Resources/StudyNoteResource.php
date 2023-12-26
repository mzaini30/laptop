<?php

namespace App\Filament\Resources;

use App\Filament\Resources\StudyNoteResource\Pages;
use App\Filament\Resources\StudyNoteResource\RelationManagers;
use App\Models\StudyNote;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class StudyNoteResource extends Resource
{
    protected static ?string $model = StudyNote::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make("judul")->required(),
                Grid::make([
                    "default" => "2"
                ])->schema([
                            TextInput::make("tujuan")->required(),
                            DatePicker::make("tanggal")->required(),
                        ]),
                //


                RichEditor::make("catatan_perjalanan")->required()
                //     $table->date("tanggal");
                // $table->string("tujuan");
                // $table->text("catatan_perjalanan");
            ])->columns(1);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                // TextInput::make("judul")->required(),
                // DatePicker::make("tanggal")->required(),
                // TextInput::make("tujuan")->required(),
                // RichEditor::make("catatan_perjalanan")->required()
                TextColumn::make("judul")->searchable()->sortable(),
                TextColumn::make("tanggal"),
                TextColumn::make("tujuan")->sortable()->searchable()
            ])
            ->filters([
                //
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
            'index' => Pages\ListStudyNotes::route('/'),
            'create' => Pages\CreateStudyNote::route('/create'),
            'edit' => Pages\EditStudyNote::route('/{record}/edit'),
        ];
    }
}
