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
        Schema::create('k_h_s', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('mahasiswa_id')->constrained()->onDelete('cascade');
            $table->string('nim');
            $table->string('semester');
            $table->integer('jml_sks');
            $table->float('ipk');
            $table->string('scan_khs');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('k_h_s');
    }
};
