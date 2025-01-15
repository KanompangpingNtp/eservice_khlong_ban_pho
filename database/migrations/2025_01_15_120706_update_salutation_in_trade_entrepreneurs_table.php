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
        Schema::table('trade_entrepreneurs', function (Blueprint $table) {
            //
            $table->string('salutation')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('trade_entrepreneurs', function (Blueprint $table) {
            //
            $table->dropColumn('salutation');
        });
    }
};
