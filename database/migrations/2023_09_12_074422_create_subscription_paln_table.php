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
        Schema::create('subscription_paln', function (Blueprint $table) {
            $table->id('SubscriptionId');
            $table->string('plan_name');
            $table->string('plan_price');
            $table->string('plan_validity');
            $table->text('plan_description')->nullable();
            $table->tinyInteger('is_delete')->default('0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subscription_paln');
    }
};
