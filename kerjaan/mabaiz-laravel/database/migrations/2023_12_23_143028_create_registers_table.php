<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('registers', function (Blueprint $table) {
            $table->id();
            // program unggulan
            $table->string("banyak_hapalan");
            $table->text("motivasi");
            // data identitas utama
            $table->string("nama_lengkap");
            $table->string("jenis_kelamin");
            $table->string("tempat_lahir");
            $table->date("tanggal_lahir");
            $table->string("email")->nullable();
            $table->string("nomor_whatsapp");
            $table->string("nama_ayah");
            $table->string("nama_ibu");
            $table->string("anak_ke");
            $table->string("dari");
            $table->string("nomor_whatsapp_wali");
            // data alamat lengkap
            $table->string("provinsi");
            $table->string("kota");
            $table->string("kecamatan");
            $table->string("rt")->nullable();
            $table->string("rw")->nullable();
            $table->text("alamat");
            $table->string("kode_pos")->nullable();
            // data pendidikan terakhir
            $table->string("pendidikan_terakhir");
            $table->string("asal_sekolah");
            // upload dokumen pendukung
            $table->string("foto_formal");
            $table->string("ijazah_terakhir");
            // tes baca quran
            $table->string("tes_baca_quran")->nullable();
            // kesepakatan
            $table->boolean("data_sesuai");
            $table->boolean("bersedia_dihubungi");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registers');
    }
};
