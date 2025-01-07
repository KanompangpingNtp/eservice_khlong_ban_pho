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
            $table->foreignId('child_information_id')
                ->constrained('child_information')
                ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('surrender_the_children', function (Blueprint $table) {
            //
            $table->dropForeign(['child_information_id']);
            $table->dropColumn('child_information_id');
        });
    }
};
