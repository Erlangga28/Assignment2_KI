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
        Schema::create('privatedata', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 50);
            $table->string('nik', 100);
            $table->string('alamat', 250);
            $table->string('gol_darah', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('privatedata');
    }
};
