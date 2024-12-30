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
        Schema::table('partner_all_o_p_d_doctor_models', function (Blueprint $table) {
            $table->string('doctor_more')->nullable()->after('doctor_fees');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('partner_all_o_p_d_doctor_models', function (Blueprint $table) {
            $table->dropColumn('doctor_more');
        });
    }
};
