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
        Schema::create('p_k_l_s', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('mahasiswa_id')->constrained()->onDelete('cascade');;
            $table->integer('status');
            $table->string('nim');
            $table->string('nilai');
            $table->string('scan_seminar');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('p_k_l_s');
    }
};
