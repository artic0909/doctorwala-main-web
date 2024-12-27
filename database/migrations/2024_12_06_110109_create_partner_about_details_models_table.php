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
        Schema::create('partner_about_details_models', function (Blueprint $table) {

            $table->id();
            $table->unsignedBigInteger('currently_loggedin_partner_id');
            $table->foreign('currently_loggedin_partner_id', 'currently_loggedin_partner_id')
                ->references('id')
                ->on('dw_partner_models')
                ->onDelete('cascade');
            $table->text('about_details')->nullable();
            $table->text('mission_details')->nullable();
            $table->text('vision_details')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('partner_about_details_models');
    }
};
