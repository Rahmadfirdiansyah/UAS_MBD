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
        Schema::create('suppliers', function (Blueprint $table) {
            $table->increments('SupplierID');
            $table->string('CompanyName');
            $table->string('ContactName');
            $table->string('ContactTitle');
            $table->string('Address');
            $table->string('City');
            $table->string('Region');
            $table->string('PostalCode');
            // Tambahkan kolom lainnya sesuai dengan ERD
    
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suppliers');
    }
};
