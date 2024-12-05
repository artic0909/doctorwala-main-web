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
        Schema::create('partner_o_p_d_contact_models', function (Blueprint $table) {
            $table->id();
            $table->foreignId('partner_id')->constrained('dw_partner_models')->onDelete('cascade'); // Foreign key relation to dw_partner_models table
            $table->json('registration_type'); // Array field, stored as JSON
            $table->string('clinic_contact_person_name');
            $table->string('clinic_gst_number')->nullable(); // Optional field
            $table->string('clinic_email');
            $table->string('clinic_landmark');
            $table->string('clinic_pincode');
            $table->string('clinic_google_map_link')->nullable(); // Optional field
            $table->string('clinic_state');
            $table->string('clinic_city');
            $table->text('clinic_address');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('partner_o_p_d_contact_models');
    }
};
