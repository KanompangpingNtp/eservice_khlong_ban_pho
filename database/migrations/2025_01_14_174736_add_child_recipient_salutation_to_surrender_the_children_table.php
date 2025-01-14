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
            $table->string('child_recipient_salutation')->after('child_recipient')->nullable();
            $table->string('child_surrender_salutation')->nullable();
            $table->string('child_surrender_salutation1')->nullable();
            $table->string('child_salutation')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('surrender_the_children', function (Blueprint $table) {
            //
            $table->dropColumn('child_recipient_salutation');
            $table->dropColumn('child_surrender_salutation');
            $table->dropColumn('child_surrender_salutation1');
            $table->dropColumn('child_salutation');
        });
    }
};
