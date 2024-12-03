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
        Schema::create('dw_user_models', function (Blueprint $table) {
            $table->id();
            $table->string('user_name');
            $table->string('user_mobile');
            $table->string('user_city');
            $table->string('user_email');
            $table->string('user_password');
            $table->string('signupCaptchaInput');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dw_user_models');
    }
};
