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
            $table->string('marital_status_details')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('child_registrations', function (Blueprint $table) {
            //
            $table->dropColumn('marital_status_details');
        });
    }
};
