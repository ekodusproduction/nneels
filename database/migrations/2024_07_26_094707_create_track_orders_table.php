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
        Schema::create('track_orders', function (Blueprint $table) {
            $table->id();
            $table->string('order_id');
            $table->boolean('is_order_processed');
            $table->timestamp('processed_on');
            $table->boolean('is_order_dispatched');
            $table->timestamp('dispatched_on');
            $table->boolean('is_order_delivered');
            $table->timestamp('delivered_on');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('track_orders');
    }
};
