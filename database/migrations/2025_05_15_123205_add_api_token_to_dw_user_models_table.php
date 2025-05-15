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
        Schema::table('dw_user_models', function (Blueprint $table) {
            $table->string('api_token', 80)->after('user_password')->unique()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('dw_user_models', function (Blueprint $table) {
            //
        });
    }
};
