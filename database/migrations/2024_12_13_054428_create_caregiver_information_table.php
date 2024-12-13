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
        Schema::create('caregiver_information', function (Blueprint $table) {
            $table->id();
            $table->foreignId('child_information_id')->constrained('child_information')->cascadeOnDelete();
            $table->string('father_name');
            $table->string('father_occupation');
            $table->string('edu_qual_father');
            $table->string('mother_name');
            $table->string('mother_occupation');
            $table->string('edu_qual_mother');
            $table->string('care_option');
            $table->string('care_option_other')->nullable();
            $table->string('caretaker_income');
            $table->string('applicants_name');
            $table->string('applicants_relevant');
            $table->string('child_carrier_name');
            $table->string('child_carrier_relevant');
            $table->string('child_carrier_phone');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('caregiver_information');
    }
};
