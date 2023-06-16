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
        Schema::create('order_details', function (Blueprint $table) {
            $table->increments('OrderID');
            $table->integer('ProductID')->unsigned();
            $table->decimal('UnitPrice', 8, 2);
            $table->integer('Quantity');
            $table->decimal('Discount', 4, 2);
            $table->timestamps();
    
            $table->foreign('ProductID')->references('ProductID')->on('products');
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_details');
    }
};
