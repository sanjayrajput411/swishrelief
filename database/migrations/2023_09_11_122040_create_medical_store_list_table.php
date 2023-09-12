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
        Schema::create('medical_store_list', function (Blueprint $table) {
            $table->id('store_id');
            $table->string('store_name')->nullable();
            $table->integer('store_mobile_number')->nullable();
            $table->text('store_address')->nullable();
            $table->string('store_image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medical_store_list');
    }
};
