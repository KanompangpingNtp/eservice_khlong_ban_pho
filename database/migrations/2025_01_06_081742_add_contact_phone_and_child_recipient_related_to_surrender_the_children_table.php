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
            $table->string('contact_phone')->nullable();
            $table->string('child_recipient_related')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('surrender_the_children', function (Blueprint $table) {
            //
            $table->dropColumn('contact_phone');
            $table->dropColumn('child_recipient_related');
        });
    }
};
