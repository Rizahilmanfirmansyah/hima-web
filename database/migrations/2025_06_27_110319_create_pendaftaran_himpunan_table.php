<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('tb_pendaftaran_himpunan', function (Blueprint $table) {
    $table->id('id_pendaftaran');
    $table->string('nama', 100);
    $table->text('motivasi');
    $table->foreignId('divisi_pilihan')->constrained('tb_divisi');
    $table->enum('status_seleksi', ['diterima', 'ditolak', 'diproses'])->default('diproses');
    $table->timestamp('tanggal_daftar')->useCurrent();
    $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pendaftaran_himpunan');
    }
};
