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
        Schema::create('partner_all_pathology_info_models', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('currently_loggedin_partner_id');
            $table->json('pathology_tests'); // JSON field for storing doctor details
            $table->string('status')->default('Available'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('partner_all_pathology_info_models');
    }
};
