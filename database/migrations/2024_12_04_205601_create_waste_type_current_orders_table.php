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
        Schema::create('waste_type_current_orders', function (Blueprint $table) {
            $table->foreignId('current_order_id')->constrained('current_orders')->onDelete('cascade');
            $table->foreignId('waste_type_id')->constrained('waste_types')->onDelete('cascade');
            $table->double('quantity_kg');
            $table->double('price_for_kg');
            $table->primary(['current_order_id', 'waste_type_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('waste_type_current_orders');
    }
};
