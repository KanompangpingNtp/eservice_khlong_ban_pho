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
        Schema::create('biz_haz_license_files', function (Blueprint $table) {
            $table->id();
            $table->foreignId('biz_haz_licenses_id')->nullable()->constrained('biz_haz_licenses')->nullOnDelete();
            $table->string('file_path');
            $table->string('file_type');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('biz_haz_license_files');
    }
};
