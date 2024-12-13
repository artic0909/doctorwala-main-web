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
        Schema::create('super_aboutus_models', function (Blueprint $table) {
            $table->id();
            $table->string('about_image');
            $table->string('ab_title');
            $table->text('ab_b_txt');
            $table->text('ab_desc');
            $table->text('ab_mission');
            $table->text('ab_vision');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('super_aboutus_models');
    }
};
