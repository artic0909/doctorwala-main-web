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
        Schema::create('partner_pathology_contact_models', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('currently_loggedin_partner_id');
            $table->foreign('currently_loggedin_partner_id', 'id')
                ->references('id')
                ->on('dw_partner_models')
                ->onDelete('cascade');
            $table->string('clinic_registration_type'); // OPD, Pathology, etc.
            $table->string('clinic_contact_person_name');
            $table->string('clinic_gstin')->nullable(); // Optional
            $table->string('clinic_mobile_number');
            $table->string('clinic_email');
            $table->string('clinic_landmark');
            $table->string('clinic_pincode');
            $table->string('clinic_state');
            $table->string('clinic_city');
            $table->string('clinic_google_map_link')->nullable(); // Optional
            $table->text('clinic_address');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('partner_pathology_contact_models');
    }
};
