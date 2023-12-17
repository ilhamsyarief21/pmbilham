<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('datadiri_tabel', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->string('alamat_ktp');
            $table->string('alamat_lengkap_saat_ini');
            $table->string('kecamatan');
            $table->string('kabupaten');
            $table->string('propinsi_ktp');
            $table->integer('nomor_telepon');
            $table->integer('nomor_hp');
            $table->string('email');
            $table->string('kewarganegaraan');
            $table->date('tanggal_lahir');
            $table->string('tempat_lahir');
            $table->string('kota_kabupaten');
            $table->string('propinsi');
            $table->string('jenis_kelamin');
            $table->string('status_menikah');
            $table->string('agama');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('datadiri_tabel');
    }
};

