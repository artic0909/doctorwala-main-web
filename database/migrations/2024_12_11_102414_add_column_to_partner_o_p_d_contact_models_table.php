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
        Schema::table('partner_o_p_d_contact_models', function (Blueprint $table) {
            $table->string('status')->default('Inactive');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('partner_o_p_d_contact_models', function (Blueprint $table) {
            $table->dropColumn('status');
        });
    }
};
