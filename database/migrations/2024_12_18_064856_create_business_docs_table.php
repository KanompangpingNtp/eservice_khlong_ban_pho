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
        Schema::create('business_docs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('users_id')->nullable()->constrained('users')->nullOnDelete();
            $table->enum('status', ['1', '2']);
            $table->string('admin_name_verifier')->nullable();
            $table->string('business_operator_name');
            $table->string('registration_number');
            $table->string('owner_name');
            $table->string('company_name');
            $table->string('address');
            $table->string('website')->nullable();
            $table->string('group_of_websites')->nullable();
            $table->string('types_of_business');
            $table->string('order_products_used')->nullable();
            $table->string('order_products_used_detail')->nullable();
            $table->string('payment_method')->nullable();
            $table->string('payment_method_detail')->nullable();
            $table->string('shipping_method')->nullable();
            $table->string('shipping_method_detail')->nullable();
            $table->string('capital_amount')->nullable();
            $table->string('telephone_number')->nullable();
            $table->string('fax_number')->nullable();
            $table->string('e_mail')->nullable();
            $table->string('manager_name')->nullable();
            $table->string('registered_office')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('business_docs');
    }
};
