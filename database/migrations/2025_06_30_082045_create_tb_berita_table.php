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
        Schema::create('tb_berita', function (Blueprint $table) {
            $table->id();
            $table->string('judul', 255);
            $table->string('slug', 255)->unique();
            $table->longText('isi');
            $table->string('thumbnail', 255)->nullable(); 
            $table->enum('kategori', ['Kegiatan', 'Pengumuman', 'Lomba', 'Info Maba'])->default('Kegiatan');
            $table->string('penulis', 100);
            $table->enum('status', ['draft', 'terbit'])->default('draft');
            $table->timestamp('published_at')->nullable();
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
        Schema::dropIfExists('tb_berita');
    }
};
