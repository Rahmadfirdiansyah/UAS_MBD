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
            $table->increments('ProductID');
            $table->string('ProductName');
            $table->integer('SupplierID')->unsigned();
            $table->integer('CategoryID')->unsigned();
            $table->string('QuantityPerUnit');
            $table->decimal('UnitPrice', 8, 2);
            $table->integer('UnitsInStock');
            $table->integer('UnitsOnOrder');
            $table->integer('ReorderLevel');
            $table->boolean('Discontinued');
            $table->timestamps();
            $table->foreign('SupplierID')->references('SupplierID')->on('suppliers');
            $table->foreign('CategoryID')->references('CategoryID')->on('categories');
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
