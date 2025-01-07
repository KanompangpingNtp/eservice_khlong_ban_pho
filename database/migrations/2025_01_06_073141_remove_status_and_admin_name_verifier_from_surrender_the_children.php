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
            $table->dropColumn(['status', 'admin_name_verifier']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('surrender_the_children', function (Blueprint $table) {
            //
            $table->enum('status', ['1', '2']);
            $table->string('admin_name_verifier')->nullable();
        });
    }
};
