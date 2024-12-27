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
        Schema::create('partner_all_o_p_d_doctor_models', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('currently_loggedin_partner_id');
            $table->foreign('currently_loggedin_partner_id', 'partner_opd_doctor_currently_loggedin_partner_id')
                ->references('id')
                ->on('dw_partner_models')
                ->onDelete('cascade');
            $table->string('doctor_name');
            $table->string('doctor_designation');
            $table->string('doctor_specialist');
            $table->string('doctor_fees');
            $table->json('visit_day_time')->nullable(); // JSON field
            $table->string('status')->default('Available');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('partner_all_o_p_d_doctor_models');
    }
};
