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
            $table->string('number_of_siblings')->change();
            $table->string('elder_brother')->change();
            $table->string('younger_brother')->change();
            $table->string('elder_sister')->change();
            $table->string('younger_sister')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('child_registrations', function (Blueprint $table) {
            //
            $table->integer('number_of_siblings')->change();
            $table->integer('elder_brother')->change();
            $table->integer('younger_brother')->change();
            $table->integer('elder_sister')->change();
            $table->integer('younger_sister')->change();
        });
    }
};
