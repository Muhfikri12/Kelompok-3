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
        Schema::create('position', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('type',['Kades','Sekertaris','Kaur','Kasi','Staf']);
            $table->text('description')->nullable();
            $table->timestamps();

        });


        Schema::create('task', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('position_id');
            $table->string('name');
            $table->text('description')->nullable();
            $table->timestamps();
            $table->foreign('position_id')->references('id')->on('position');
        });

        Schema::create('staff', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('status',['Aktif','Nonaktif']);
            $table->unsignedBigInteger('position_id');
            $table->string('gender')->nullable();
            $table->string('nip')->nullable();
            $table->string('phone')->nullable();
            $table->string('photo')->nullable();
            $table->text('address')->nullable();
            $table->timestamps();

            $table->foreign('position_id')->references('id')->on('position');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('position');
        Schema::dropIfExists('task');
        Schema::dropIfExists('perangkat_desa');
    }
};
