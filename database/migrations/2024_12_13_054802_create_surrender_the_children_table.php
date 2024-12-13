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
        Schema::create('surrender_the_children', function (Blueprint $table) {
            $table->id();
            $table->foreignId('users_id')->nullable()->constrained('users')->nullOnDelete();
            $table->enum('status', ['1', '2']);
            $table->string('admin_name_verifier')->nullable();
            $table->string('full_name');
            $table->integer('age');
            $table->string('occupation');
            $table->string('income');
            $table->string('village');
            $table->string('alley_road');
            $table->string('subdistrict');
            $table->string('district');
            $table->string('province');
            $table->string('phone_number');
            $table->string('childs_name');
            $table->string('contact_location');
            $table->string('salutation');
            $table->string('child_recipient');
            $table->string('child_recipient_relevant');
            $table->string('child_recipient_phone');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surrender_the_children');
    }
};
