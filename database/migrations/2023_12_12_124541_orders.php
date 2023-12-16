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
            $table->id('id_order');
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id')->on('users');
            $table->unsignedBigInteger('id_cities');
            $table->foreign('id_cities')->references('id_city')->on('cities');
            $table->unsignedBigInteger('id_provinces');
            $table->foreign('id_provinces')->references('id_province')->on('provinces');
            $table->string('name');
            $table->string('phone_number', 15);
            $table->string('address');
            $table->string('cities');
            $table->string('provinces');
            $table->string('postal_code', 5);
            $table->string('bank');
            $table->unsignedBigInteger('sub_total');
            $table->string('resi_number');
            $table->string('product_status');
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
