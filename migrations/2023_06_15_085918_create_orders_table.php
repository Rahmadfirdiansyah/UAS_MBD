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
            $table->increments('OrderID');
            $table->integer('CustomerID')->unsigned();
            $table->integer('EmployeeID')->unsigned();
            $table->datetime('OrderDate');
            $table->datetime('RequiredDate');
            $table->datetime('ShippedDate')->nullable();
            $table->integer('ShipVia');
            $table->decimal('Freight', 10, 2);
            $table->string('ShipName');
            $table->string('ShipAddress');
            // Tambahkan kolom lainnya sesuai dengan ERD
    
            $table->timestamps();
        });
    
        Schema::table('orders', function (Blueprint $table) {
            $table->foreign('CustomerID')->references('CustomerID')->on('customers');
            $table->foreign('EmployeeID')->references('EmployeeID')->on('employees');
        });
    }
    
    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropForeign(['CustomerID']);
            $table->dropForeign(['EmployeeID']);
        });
    
        Schema::dropIfExists('orders');
    }
};
