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
        Schema::create('ea_bankac_options', function (Blueprint $table) {
            $table->id(); // auto-incrementing id
            $table->foreignId('ea_people_id')->constrained('ea_people')->onDelete('cascade'); // foreign key reference
            $table->string('bank_option');
            $table->string('bank_name');
            $table->string('account_number');
            $table->string('account_name');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ea_bankac_options');
    }
};
