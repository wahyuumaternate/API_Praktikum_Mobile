<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Jalankan migration.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('content');
            $table->string('author');
            $table->string('image')->nullable(); // Kolom untuk menyimpan nama file gambar
            $table->timestamps();
        });
    }

    /**
     * Hapus migration.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
};
