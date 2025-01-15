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
        Schema::table('surrender_the_children', function (Blueprint $table) {
            //
            $table->string('hour_number')->nullable()->after('income');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('surrender_the_children', function (Blueprint $table) {
            //
            $table->dropColumn('hour_number');
        });
    }
};
