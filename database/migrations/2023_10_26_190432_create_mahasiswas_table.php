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
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nama');
            $table->string('nim')->unique();
            $table->string('email')->unique();
            $table->string('no_hp')->unique();
            $table->string('alamat');
            $table->foreignId('dosen_wali_id')->constrained()->onDelete('cascade');
            $table->integer('angkatan');
            $table->string('status');
            $table->string("kab_kota");
            $table->string("provinsi");
            $table->string("jalur_masuk");
            $table->float("ipk");
            $table->string("foto");
            $table->integer("sksk");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswas');
    }
};
