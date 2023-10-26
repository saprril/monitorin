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
        Schema::create('skripsis', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('mahasiswa_id')->foreign('id')->on('mahasiswas')->cascadeOnDelete();
            $table->integer('status');
            $table->string('nim');
            $table->string('nilai');
            $table->string('scan_sidang');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('skripsis');
    }
};
