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
        Schema::create('biz_haz_licenses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('users_id')->nullable()->constrained('users')->nullOnDelete();
            $table->enum('status', ['1', '2']);
            $table->string('admin_name_verifier')->nullable();
            $table->string('written_at')->nullable();
            $table->string('write_the_date')->nullable();
            $table->string('salutation')->nullable();
            $table->string('full_name')->nullable();
            $table->string('age')->nullable();
            $table->string('nationality')->nullable();
            $table->string('house_number')->nullable();
            $table->string('village')->nullable();
            $table->string('alley')->nullable();
            $table->string('road')->nullable();
            $table->string('subdistrict')->nullable();
            $table->string('district')->nullable();
            $table->string('province')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('food_distribution')->nullable();
            $table->string('food_distribution_type')->nullable();
            $table->string('food_distribution_area')->nullable();
            $table->string('it_dangerous')->nullable();
            $table->string('it_dangerous_type')->nullable();
            $table->string('it_there_are_workers')->nullable();
            $table->string('it_use_machinery_size')->nullable();
            $table->string('on_sale')->nullable();
            $table->string('on_sale_detail')->nullable();
            $table->string('public_health_products')->nullable();
            $table->string('public_health_products_detail')->nullable();
            $table->string('public_health_products_area')->nullable();
            $table->string('public_health_products_way')->nullable();
            $table->string('collection_service_business')->nullable();
            $table->string('waste_collection')->nullable();
            $table->string('waste_collection_detail')->nullable();
            $table->string('collect_and_dispose_waste')->nullable();
            $table->string('collect_and_dispose_detail')->nullable();
            $table->string('garbage_collection')->nullable();
            $table->string('garbage_collection_detail')->nullable();
            $table->string('collect_and_dispose_of_waste')->nullable();
            $table->string('collect_and_dispose_of_waste_detail')->nullable();
            $table->string('local_officials')->nullable();
            $table->string('copy_of_ID_card')->nullable();
            $table->string('evidence_of_permission')->nullable();
            $table->string('evidence_of_permission_detail_1')->nullable();
            $table->string('evidence_of_permission_detail_2')->nullable();
            $table->string('detail_1')->nullable();
            $table->string('detail_2')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('biz_haz_licenses');
    }
};
