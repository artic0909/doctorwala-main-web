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
        Schema::create('super_subscription_models', function (Blueprint $table) {
            $table->id();
            $table->string('subs_image');
            $table->string('subs_title');
            $table->string('subs_amount');
            $table->string('subs_open_date');
            $table->string('subs_close_date');
            $table->json('features'); //array
            $table->string('status')->default('Active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('super_subscription_models');
    }
};
