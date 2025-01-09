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
        Schema::table('caregiver_information', function (Blueprint $table) {
            //
            $table->string('care_option_relative_text')->nullable()->after('care_option');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('caregiver_information', function (Blueprint $table) {
            //
            $table->dropColumn('care_option_relative_text');
        });
    }
};
