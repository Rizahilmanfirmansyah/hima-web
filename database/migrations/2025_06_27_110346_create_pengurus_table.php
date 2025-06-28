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
        Schema::create('tb_pengurus', function (Blueprint $table) {
    $table->id('id_pengurus');
    $table->string('nama', 100);
    $table->foreignId('id_divisi')->constrained('tb_divisi')->onDelete('cascade');
    $table->string('jabatan', 100);
    $table->string('foto',100);
    $table->string('periode', 9); // contoh: "2024/2025"
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
        Schema::dropIfExists('pengurus');
    }
};
