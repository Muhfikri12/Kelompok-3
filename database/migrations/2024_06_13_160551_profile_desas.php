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
        Schema::create('profile_desas', function (Blueprint $table) {
            $table->id();
            $table->text('content_misi')->nullable();
            $table->text('content_visi')->nullable();
            $table->text('alamat')->nullable();
            $table->text('about_us')->nullable();
            $table->text('sejarah')->nullable();
            $table->string('icon_link')->nullable();
            $table->string('yt_link')->nullable();
            $table->string('fb_link')->nullable();
            $table->string('wa_link')->nullable();
            $table->string('ig_link')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
