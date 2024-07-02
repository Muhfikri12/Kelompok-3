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
        Schema::create('geografis', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('koordinat')->default("-");
            $table->string('luas')->default("-");
            $table->string('utara')->default("-");
            $table->string('selatan')->default("-");
            $table->string('timur')->default("-");
            $table->string('barat')->default("-");
            $table->text('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('geografis');
    }
};
