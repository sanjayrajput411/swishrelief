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
        Schema::create('orders', function (Blueprint $table) {
            $table->id('order_id');
            $table->integer('user_id');
            $table->integer('store_id')->nullable();
            $table->integer('patient_id')->nullable();
            $table->integer('medical_qty')->nullable();
            $table->text('address')->nullable();
            $table->text('note')->nullable();
            $table->string('pickup_date')->nullable();
            $table->string('pickup_time')->nullable();
            $table->string('delivery_date')->nullable();
            $table->string('delivery_time')->nullable();
            $table->integer('orders_price')->nullable();
            $table->integer('delivery_price')->nullable();
            $table->integer('total_order_price')->nullable();
            $table->tinyInteger('order_status')->default('0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
