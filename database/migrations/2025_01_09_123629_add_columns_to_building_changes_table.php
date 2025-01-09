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
        Schema::table('building_changes', function (Blueprint $table) {
            //
            $table->text('legal_name')->nullable(); // ชื่อนิติ
            $table->string('building_type_new', 50)->nullable(); // ประเภทก่อสร้าง
            $table->string('title_deed_type', 50)->nullable(); // ประเภทโฉนด
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('building_changes', function (Blueprint $table) {
            //
            $table->dropColumn(['legal_name', 'building_type_new', 'title_deed_type']);
        });
    }
};
