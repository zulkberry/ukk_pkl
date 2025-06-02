<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('industris', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('bidang_usaha')->nullable();
            $table->string('alamat')->nullable();
            $table->string('kontak')->nullable();
            $table->string('email')->nullable();
            $table->unsignedBigInteger('guru_pembimbing')->nullable();
            $table->timestamps();

            $table->foreign('guru_pembimbing')->references('id')->on('gurus')->onDelete('set null');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('industri');
    }
};
