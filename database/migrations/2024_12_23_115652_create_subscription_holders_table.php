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
        Schema::create('subscription_holders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('currently_loggedin_partner_id');
            $table->foreign('currently_loggedin_partner_id')->references('id')->on('dw_partner_models')->onDelete('cascade');
            $table->unsignedBigInteger('subscription_id');
            $table->foreign('subscription_id')->references('id')->on('super_subscription_models')->onDelete('cascade');
            $table->string('subscription_title');
            $table->decimal('subscription_amount', 10, 2);
            $table->decimal('transaction_id');
            $table->string('partner_clinic_name');
            $table->string('partner_contact_person_name');
            $table->string('partner_mobile_number');
            $table->string('partner_email');
            $table->date('current_holding_date'); // Adjusted to `date` type
            $table->date('close_date'); // Adjusted to `date` type
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subscription_holders');
    }
};
