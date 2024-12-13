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
        Schema::create('child_information', function (Blueprint $table) {
            $table->id();
            $table->foreignId('users_id')->nullable()->constrained('users')->nullOnDelete();
            $table->enum('status', ['1', '2']);
            $table->string('admin_name_verifier')->nullable();
            $table->string('full_name');
            $table->string('ethnicity');
            $table->string('nationality');
            $table->date('birthday');
            $table->integer('age');
            $table->integer('age_months');
            $table->string('citizen_id');
            $table->date('age_since_date');
            $table->string('regis_house_number');
            $table->string('regis_village');
            $table->string('regis_road');
            $table->string('regis_subdistrict');
            $table->string('regis_district');
            $table->string('regis_province');
            $table->string('current_house_number');
            $table->string('current_village');
            $table->string('current_road');
            $table->string('current_subdistrict');
            $table->string('current_district');
            $table->string('current_province');
            $table->string('current_phone_number');
            $table->integer('number_of_siblings');
            $table->string('congenital_disease');
            $table->string('blood_group');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('child_information');
    }
};
