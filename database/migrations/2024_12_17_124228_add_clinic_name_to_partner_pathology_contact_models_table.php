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
        Schema::table('partner_pathology_contact_models', function (Blueprint $table) {
            $table->string('clinic_name')->nullable()->after('clinic_contact_person_name');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('partner_pathology_contact_models', function (Blueprint $table) {
            $table->dropColumn('clinic_name');
        });
    }
};
