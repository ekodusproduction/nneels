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
        Schema::create('shipping_adresses', function (Blueprint $table) {
            $table->id();
            $table->string('order_id')->nullable();
            $table->string('fullname');            
            $table->string('company_name')->nullable();
            $table->string('country');
            $table->string('address_1');
            $table->string('address_2')->nullable();
            $table->string('town_or_city');
            $table->string('zip_code');
            $table->string('province')->nullable();
            $table->string('phone');
            $table->string('email');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shipping_adresses');
    }
};
