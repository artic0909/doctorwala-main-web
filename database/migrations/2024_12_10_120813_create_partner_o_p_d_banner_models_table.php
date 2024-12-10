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
        Schema::create('partner_o_p_d_banner_models', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('currently_loggedin_partner_id')->references('id')->on('partners')->onDelete('cascade');
            $table->string('opdbanner');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('partner_o_p_d_banner_models');
    }
};