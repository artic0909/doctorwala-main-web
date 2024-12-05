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
        Schema::create('dw_partner_models', function (Blueprint $table) {
            $table->id();
            $table->string('partner_id')->unique();
            $table->string('partner_clinic_name');
            $table->string('partner_contact_person_name');
            $table->string('partner_mobile_number')->unique();
            $table->string('partner_email')->unique();
            $table->string('partner_state');
            $table->string('partner_city');
            $table->string('partner_pincode');
            $table->string('partner_landmark');
            $table->string('partner_address');
            $table->string('partner_password');
            $table->json('registration_type');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dw_partner_models');
    }
};
