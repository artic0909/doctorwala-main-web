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
        Schema::create('partner_inquiry_models', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('currently_loggedin_partner_id');
            $table->foreign('currently_loggedin_partner_id', 'partner_inquiry_currently_loggedin_partner_id')
                ->references('id')
                ->on('dw_partner_models')
                ->onDelete('cascade');
            $table->string('partner_contact_person_name');
            $table->string('partner_mobile_number');
            $table->string('partner_email');
            $table->string('partner_state');
            $table->string('partner_city');
            $table->string('partner_landmark')->nullable();
            $table->string('partner_pincode');
            $table->text('partner_problem');
            $table->text('partner_problem_reply')->nullable();
            $table->string('ticket_id')->unique();
            $table->timestamps();

            // Foreign key for partner ID
            $table->foreign('currently_loggedin_partner_id')
                  ->references('id')
                  ->on('dw_partner_models')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('partner_inquiry_models');
    }
};
