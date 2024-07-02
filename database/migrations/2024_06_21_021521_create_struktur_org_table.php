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
        Schema::create('struktur_org', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('type',['kades','sekertaris','kaur','kasi','kadus','staf'])->default('kades');
            $table->unsignedBigInteger('staff_id')->nullable()->default(NULL);
            $table->unsignedBigInteger('parent_id')->nullable()->default(NULL);
            $table->timestamps();

            $table->foreign('staff_id')->references('id')->on('staff');
            $table->foreign('parent_id')->references('id')->on('struktur_org');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('struktur_org');
    }
};
