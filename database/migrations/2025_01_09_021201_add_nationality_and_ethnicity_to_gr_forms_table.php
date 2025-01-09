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
        Schema::table('gr_forms', function (Blueprint $table) {
            //
            $table->string('nationality')->nullable();
            $table->string('ethnicity')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('gr_forms', function (Blueprint $table) {
            //
            $table->dropColumn('nationality');
            $table->dropColumn('ethnicity');
        });
    }
};
