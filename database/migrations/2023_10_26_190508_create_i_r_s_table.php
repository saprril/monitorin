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
        Schema::create('i_r_s', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('mahasiswa_id')->on('mahasiswas')->onDelete('cascade');
            $table->string('nim');
            $table->string('semester');
            $table->integer('jml_sks');
            $table->string('scan_irs');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('i_r_s');
    }
};
