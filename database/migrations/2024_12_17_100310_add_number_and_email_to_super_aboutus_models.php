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
        Schema::table('super_aboutus_models', function (Blueprint $table) {
            $table->string('number')->nullable()->after('ab_vision');
            $table->string('email')->nullable()->after('number');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('super_aboutus_models', function (Blueprint $table) {
            $table->dropColumn(['number', 'email']);
        });
    }
};
