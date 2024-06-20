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
        Schema::create('category_demografi', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('keterangan')->nullable();
            $table->timestamps();
        });

        Schema::create('demografi', function (Blueprint $table) {
            $table->id();
            $table->string('tahun');
            $table->string('keterangan');
            $table->unsignedBigInteger('kategori_id');
            $table->integer('total');
            $table->enum('satuan',['Jiwa',"Orang","Kepala Keluarga","KK","KTP"]);
            $table->timestamps();

            $table->foreign('kategori_id')->references('id')->on('category_demografi');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('category_demografi');
        Schema::dropIfExists('demografi');
    }
};
