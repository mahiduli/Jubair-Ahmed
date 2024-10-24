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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('meta_title')->nullable();
            $table->text('address')->nullable();
            $table->text('phone')->nullable();
            $table->text('gmail')->nullable();
            $table->string('fb_url')->nullable();
            $table->string('gm_url')->nullable();
            $table->string('in_url')->nullable();
            $table->string('meta_image')->nullable();
            $table->string('image')->nullable();
            $table->string('banner_image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
