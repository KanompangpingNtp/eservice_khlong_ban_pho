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
        Schema::table('child_registrations', function (Blueprint $table) {
            //
            $table->string('blood_group_detail')->nullable()->after('blood_group');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('child_registrations', function (Blueprint $table) {
            //
            $table->dropColumn('blood_group_detail');
        });
    }
};
