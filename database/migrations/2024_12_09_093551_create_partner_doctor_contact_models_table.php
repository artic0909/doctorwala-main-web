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
        Schema::create('partner_doctor_contact_models', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('currently_loggedin_partner_id');
            $table->foreign('currently_loggedin_partner_id', 'partner_doctor_contact_currently_loggedin_partner_id')
                ->references('id')
                ->on('dw_partner_models')
                ->onDelete('cascade');
            $table->string('clinic_registration_type'); // OPD, Pathology, Doctor etc.
            $table->string('partner_doctor_name');
            $table->string('partner_doctor_specialist');
            $table->string('partner_doctor_designation');
            $table->string('partner_doctor_fees');
            $table->string('partner_doctor_mobile');
            $table->string('partner_doctor_email');
            $table->string('partner_doctor_landmark');
            $table->string('partner_doctor_pincode');
            $table->text('partner_doctor_google_map_link')->nullable(); // Optional
            $table->string('partner_doctor_state');
            $table->string('partner_doctor_city');
            $table->text('partner_doctor_address');
            $table->json('visit_day_time'); // JSON field
            $table->string('status')->default('Inactive');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('partner_doctor_contact_models');
    }
};
