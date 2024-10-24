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
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('designation');
            $table->string('fb_url')->nullable();
            $table->string('gm_url')->nullable();
            $table->string('in_url')->nullable();
            $table->string('education')->nullable();
            $table->string('department')->nullable();
            $table->tinyInteger('add_menegment')->default('0');
            $table->tinyInteger('status')->default('0');
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};
