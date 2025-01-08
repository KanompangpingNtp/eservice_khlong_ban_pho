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
        Schema::table('trade_location_mores', function (Blueprint $table) {
            //
            $table->string('accepting_commercial_name_used')->nullable();
            $table->date('accepting_commercial_transferred')->nullable();
            $table->string('accepting_commercial_cause')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('trade_location_mores', function (Blueprint $table) {
            //
            $table->dropColumn('accepting_commercial_name_used');
            $table->dropColumn('accepting_commercial_transferred');
            $table->dropColumn('accepting_commercial_cause');
        });
    }
};
