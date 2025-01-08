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
        Schema::table('trade_registries', function (Blueprint $table) {
            //
            $table->dropColumn([
                'receive_day',
                'written_at',
                'write_the_date',
                'salutation',
                'full_name',
                'ethnicity',
                'nationality',
                'house_number',
                'village',
                'alley',
                'road',
                'subdistrict',
                'district',
                'province',
                'name_used_to_call',
                'registered',
                'registration',
                'detail',
            ]);

            // เพิ่มฟิลด์ใหม่
            $table->string('business_registration')->nullable(); // จดทะเบียนพาณิชย์
            $table->string('register_change_items')->nullable(); // จดทะเบียนเปลี่ยนแปลงรายการ
            $table->string('register_change_number')->nullable(); // จดทะเบียนเปลี่ยนแปลงรายการเลข
            $table->date('register_change_date')->nullable(); // จดทะเบียนเปลี่ยนแปลงวันที่
            $table->string('business_termination')->nullable(); // จดทะเบียนเลิกประกอบพาณิชย์
            $table->string('business_termination_detail')->nullable(); // รายละเอียดการเลิกประกอบพาณิชย์
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('trade_registries', function (Blueprint $table) {
            //
            $table->dropColumn([
                'business_registration',
                'register_change_items',
                'register_change_number',
                'register_change_date',
                'business_termination',
                'business_termination_detail',
            ]);

            // เพิ่มฟิลด์เก่ากลับคืน
            $table->date('receive_day')->nullable();
            $table->string('written_at')->nullable();
            $table->string('write_the_date')->nullable();
            $table->string('salutation')->nullable();
            $table->string('full_name');
            $table->string('ethnicity')->nullable();
            $table->string('nationality')->nullable();
            $table->string('house_number')->nullable();
            $table->string('village')->nullable();
            $table->string('alley')->nullable();
            $table->string('road')->nullable();
            $table->string('subdistrict')->nullable();
            $table->string('district')->nullable();
            $table->string('province')->nullable();
            $table->string('name_used_to_call')->nullable();
            $table->string('registered')->nullable();
            $table->string('registration')->nullable();
            $table->text('detail')->nullable();
        });
    }
};
