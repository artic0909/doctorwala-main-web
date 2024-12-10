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
        Schema::create('partner_pathology_banner_models', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('currently_loggedin_partner_id');
            $table->string('pathologybanner');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('partner_pathology_banner_models');
    }
};
