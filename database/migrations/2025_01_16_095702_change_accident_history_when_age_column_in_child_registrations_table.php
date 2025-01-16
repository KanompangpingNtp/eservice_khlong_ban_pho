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
            $table->string('accident_history_when_age')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('child_registrations', function (Blueprint $table) {
            //
            $table->integer('accident_history_when_age')->change();
        });
    }
};
