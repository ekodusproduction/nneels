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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->decimal('price',5,2);
            $table->string('size');
            $table->string('color');
            $table->bigInteger('quantity');
            $table->boolean('is_stock_available');
            $table->decimal('rate_of_discount',4,2);
            $table->string('featured_section');
            $table->longText('tags');
            $table->text('short_description');
            $table->longText('long_description');
            $table->string('main_image');

            $table->unsignedBigInteger('categories_id');
            $table->unsignedBigInteger('sub_categories_id');
            
            $table->boolean('status')->default(1);

            $table->timestamps();
            $table->softDeletes();

            $table->foreign('categories_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('sub_categories_id')->references('id')->on('sub_categories')->onDelete('cascade');

           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
