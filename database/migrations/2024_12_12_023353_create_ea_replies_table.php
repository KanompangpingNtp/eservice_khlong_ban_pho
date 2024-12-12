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
        Schema::create('ea_replies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ea_people_id')->constrained('ea_people')->cascadeOnDelete();
            $table->foreignId('users_id')->constrained('users')->cascadeOnDelete();
            $table->string('reply_text');
            $table->date('reply_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ea_replies');
    }
};