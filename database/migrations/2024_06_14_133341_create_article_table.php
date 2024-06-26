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
        Schema::create('article', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('photo')->nullable();
            $table->longText('detail_content')->nullable();
            $table->time('event_time')->nullable();
            $table->date('event_date')->nullable();
            $table->unsignedInteger('admin_id');
            $table->string('place')->nullable();
            $table->enum('type', ['pengumuman', 'berita']);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('article');
    }
};
