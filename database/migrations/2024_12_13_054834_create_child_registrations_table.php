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
        Schema::create('child_registrations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('users_id')->nullable()->constrained('users')->nullOnDelete();
            $table->enum('status', ['1', '2']);
            $table->string('admin_name_verifier')->nullable();
            $table->string('child_name');
            $table->string('child_nickname');
            $table->string('citizen_id');
            $table->date('birthday');
            $table->string('birth_province');
            $table->string('ethnicity');
            $table->string('nationality');
            $table->string('religion');
            $table->string('house_number');
            $table->string('village');
            $table->string('alley_road');
            $table->string('subdistrict');
            $table->string('district');
            $table->string('province');
            $table->string('health_option');
            $table->string('health_option_detail')->nullable();
            $table->string('blood_group');
            $table->string('congenital_disease');
            $table->string('edited_by')->nullable();
            $table->string('drug_allergy');
            $table->string('drug_allergy_detail')->nullable();
            $table->string('accident_history');
            $table->integer('accident_history_when_age');
            $table->string('ge_immunity');
            $table->string('ge_immunity_detail')->nullable();
            $table->string('specially_about');
            $table->string('the_eldest_son');
            $table->integer('number_of_siblings');
            $table->integer('elder_brother');
            $table->integer('younger_brother');
            $table->integer('elder_sister');
            $table->integer('younger_sister');
            $table->string('fathers_name');
            $table->string('fathers_age');
            $table->string('fathers_occupation');
            $table->string('fathers_workplace');
            $table->string('fathers_phone');
            $table->string('mother_name');
            $table->string('mother_age');
            $table->string('mother_occupation');
            $table->string('mother_workplace');
            $table->string('mother_phone');
            $table->string('marital_status');
            $table->string('parent_name');
            $table->string('parent_age');
            $table->string('parent_relevant_as');
            $table->string('parent_occupation');
            $table->string('parent_workplace');
            $table->string('parent_phone');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('child_registrations');
    }
};
