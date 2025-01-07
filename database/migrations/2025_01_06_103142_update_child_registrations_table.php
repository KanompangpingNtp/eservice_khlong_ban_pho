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
            // เช็คว่าคอลัมน์ 'status' มีอยู่ในตารางก่อนที่จะลบ
            if (Schema::hasColumn('child_registrations', 'status')) {
                $table->dropColumn('status');
            }

            // เช็คว่าคอลัมน์ 'admin_name_verifier' มีอยู่ในตารางก่อนที่จะลบ
            if (Schema::hasColumn('child_registrations', 'admin_name_verifier')) {
                $table->dropColumn('admin_name_verifier');
            }

            // ลบ foreign key ของ 'users_id' ถ้ามี
            $table->dropForeign(['users_id']);
            // ลบคอลัมน์ 'users_id'
            $table->dropColumn('users_id');

            // เพิ่มคอลัมน์ 'child_information_id' ที่เป็น foreign key เชื่อมกับ 'child_information'
            $table->foreignId('child_information_id')
                  ->nullable()
                  ->constrained('child_information')
                  ->nullOnDelete();
        });
    }

    public function down(): void
    {
        Schema::table('child_registrations', function (Blueprint $table) {
            // เพิ่มคอลัมน์ 'status' และ 'admin_name_verifier' กลับ
            $table->enum('status', ['1', '2']);
            $table->string('admin_name_verifier')->nullable();

            // ลบ foreign key และคอลัมน์ 'child_information_id'
            $table->dropForeign(['child_information_id']);
            $table->dropColumn('child_information_id');

            // เพิ่มคอลัมน์ 'users_id' กลับ
            $table->foreignId('users_id')
                  ->nullable()
                  ->constrained('users')
                  ->nullOnDelete();
        });
    }

};
