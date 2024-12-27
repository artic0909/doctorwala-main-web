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
            $table->foreign('currently_loggedin_partner_id', 'partner_subs_currently_loggedin_partner_id')
                ->references('id')
                ->on('dw_partner_models')
                ->onDelete('cascade');
            $table->string('subscription_title');
            $table->decimal('subscription_amount', 10, 2);
            $table->string('transaction_id')->unique();
            $table->string('partner_clinic_name');
            $table->string('partner_contact_person_name');
            $table->string('partner_mobile_number');
            $table->string('partner_email');
            $table->timestamp('current_holding_date');
            $table->string('close_date');
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
