<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RegisterResource\Pages;
use App\Filament\Resources\RegisterResource\RelationManagers;
use App\Models\Register;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
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

        $anak_ke = [];
        $dari = [];
        for ($n = 1; $n <= 12; $n++) {
            array_push($anak_ke, $n);
            array_push($dari, $n . " bersaudara");
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
                    TextInput::make("nama_ayah")->label("Nama Wali / Ayah")->required(),
                    TextInput::make("nama_ibu")->label("Nama Wali / Ibu")->required(),
                    Select::make("anak_ke")->required()->options($anak_ke),
                    Select::make("dari")->required()->options($dari),
                    TextInput::make("nomor_whatsapp_wali")->label("Nomor WhatsApp Wali")->required(),
                ]),
                Section::make("Data Alamat Lengkap")->schema([
                    TextInput::make("provinsi")->required(),
                    TextInput::make("kota")->required(),
                    TextInput::make("kecamatan")->required(),
                    TextInput::make("rt")->label("RT"),
                    TextInput::make("rw")->label("RW"),
                    Textarea::make("alamat")->required(),
                    TextInput::make("kode_pos"),
                ]),
                Section::make("Data Pendidikan Terakhir")->schema([
                    Select::make("pendidikan_terakhir")->options(["Playgroup", "TK", "SD", "Lainnya"])->required(),
                    TextInput::make("asal_sekolah")->required()
                ]),
                Section::make("Upload Dokumen Pendukung")->schema([
                    FileUpload::make("foto_formal")->image()->imageEditor()->required(),
                    FileUpload::make("ijazah_terakhir")->image()->imageEditor()->required(),
                ]),
                Section::make("Tes Baca Al-Quran")->schema([
                    FileUpload::make("tes_baca_quran")->label("Rekaman Mengaji Q.S Maryam 1-11"),
                ]),
                Section::make("")->schema([
                    Toggle::make("data_sesuai")->label("Bahwa semua data yang diberikan adalah benar dan bisa dipertanggung jawabkan")->required(),
                    Toggle::make("bersedia_dihubungi")->label("Saya bersedia dihubungi oleh admin pendaftaran Madrasah Baitul Izzah untuk memproses pendaftaran")->required()
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                TextColumn::make("nama_lengkap"),
                ImageColumn::make("foto_formal")
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
