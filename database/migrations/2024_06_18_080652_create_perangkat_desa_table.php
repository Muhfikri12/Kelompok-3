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
        Schema::create('task', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->timestamps();
        });


        Schema::create('position', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('task_id');
            $table->text('description')->nullable();
            $table->timestamps();

            $table->foreign('task_id')->references('id')->on('task');
        });

        Schema::create('perangkat_desa', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('status',['Aktif','Nonaktif']);
            $table->string('jabatan')->nullable();
            $table->string('gender')->nullable();
            $table->string('nip')->nullable();
            $table->string('phone')->nullable();
            $table->string('photo')->nullable();
            $table->text('address')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perangkat_desa');
    }
};
