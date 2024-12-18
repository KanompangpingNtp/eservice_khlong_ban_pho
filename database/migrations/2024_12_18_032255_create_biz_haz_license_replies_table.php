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
        Schema::create('biz_haz_license_replies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('biz_haz_licenses_id')->nullable()->constrained('biz_haz_licenses')->nullOnDelete();
            $table->foreignId('users_id')->nullable()->constrained('users')->nullOnDelete();
            $table->text('reply_text');
            $table->date('reply_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('biz_haz_license_replies');
    }
};
