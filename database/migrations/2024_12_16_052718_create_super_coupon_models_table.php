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
        Schema::create('super_coupon_models', function (Blueprint $table) {
            $table->id();
            $table->string('coupon_image');
            $table->string('coupon_code');
            $table->string('coupon_amount');
            $table->string('coupon_start_date');
            $table->string('coupon_end_date');
            $table->string('status')->default('Active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('super_coupon_models');
    }
};
