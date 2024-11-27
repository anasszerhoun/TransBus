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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id('idTicket')->autoIncrement();
            $table->unsignedInteger('numeroPlace');
            $table->unsignedBigInteger('idClient');
            $table->unsignedBigInteger('idVoyage');
            $table->foreign('idClient')->references('idClient')->on('clients');
            $table->foreign('idVoyage')->references('id')->on('voyages');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};







