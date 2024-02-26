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
        Schema::create('i_k_u_s', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sasaran_id');
            $table->foreign('sasaran_id')->references('id')->on('sasarans');
            $table->string('indikator');
            $table->integer('target');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('i_k_u_s');
    }
};
