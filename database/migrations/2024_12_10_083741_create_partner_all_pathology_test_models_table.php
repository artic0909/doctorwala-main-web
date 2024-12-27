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
        Schema::create('partner_all_pathology_test_models', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('currently_loggedin_partner_id');
            $table->foreign('currently_loggedin_partner_id', 'partner_pathology_tests_currently_loggedin_partner_id')
                ->references('id')
                ->on('dw_partner_models')
                ->onDelete('cascade');
            $table->string('test_name');
            $table->string('test_type');
            $table->string('test_price');
            $table->json('test_day_time')->nullable(); // JSON field
            $table->string('status')->default('Available'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('partner_all_pathology_test_models');
    }
};
