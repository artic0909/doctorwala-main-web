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
        Schema::table('partner_doctor_contact_models', function (Blueprint $table) {
            $table->string('status')->default('Inactive')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('partner_doctor_contact_models', function (Blueprint $table) {
            $table->string('status')->default('Not Available')->change();
        });
    }
};
