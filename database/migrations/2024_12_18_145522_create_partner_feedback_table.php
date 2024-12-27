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
        Schema::create('partner_feedback', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('currently_loggedin_partner_id');
            $table->foreign('currently_loggedin_partner_id', 'partner_feedbacks_currently_loggedin_partner_id')
                ->references('id')
                ->on('dw_partner_models')
                ->onDelete('cascade');
            $table->string('clinic_type');
            $table->string('clinic_name');
            $table->string('user_name');
            $table->string('user_email');
            $table->string('rating');
            $table->text('feedback');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('partner_feedback');
    }
};
