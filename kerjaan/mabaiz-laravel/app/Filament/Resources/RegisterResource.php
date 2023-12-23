<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RegisterResource\Pages;
use App\Filament\Resources\RegisterResource\RelationManagers;
use App\Models\Register;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RegisterResource extends Resource
{
    protected static ?string $model = Register::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {

        $banyak_hapalan = ["Tidak Ada"];
        for ($n = 1; $n <= 30; $n++) {
            array_push($banyak_hapalan, $n . " juz");
        }

        return $form
            ->schema([
                //
                Section::make("Program Unggulan")->schema([
                    Select::make("banyak_hapalan")->label("Banyak Hapalan yang Telah Dimiliki")->options($banyak_hapalan)->required(),
                    Textarea::make("motivasi")->label("Motivasi Mengikuti Program Tahfidz Qur'an")->required()
                ]),
                Section::make("Data Identitas Utama")->schema([
                    TextInput::make("nama_lengkap")->required(),
                    Select::make("jenis_kelamin")->required()->options(["Laki-Laki", "Perempuan"]),
                    TextInput::make("tempat_lahir")->required(),
                    DatePicker::make("tanggal_lahir")->required(),
                    TextInput::make("email"),
                    TextInput::make("nomor_whatsapp")->required(),
                    TextInput::make("nama_ayah")->label("Nama Wali / Ayah")->required()
                ]),
                Section::make("Data Alamat Lengkap")->schema([]),
                Section::make("Data Pendidikan Terakhir")->schema([]),
                Section::make("Upload Dokumen Pendukung")->schema([]),
                Section::make("Tes Baca Al-Quran")->schema([]),
                Section::make("")->schema([]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
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
            'index' => Pages\ListRegisters::route('/'),
            'create' => Pages\CreateRegister::route('/create'),
            'edit' => Pages\EditRegister::route('/{record}/edit'),
        ];
    }
}
