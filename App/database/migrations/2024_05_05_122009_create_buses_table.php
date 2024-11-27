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
        Schema::create('buses', function (Blueprint $table) {
            $table->id('idBus')->autoIncrement();
            $table->string('immatriculation',15)->unique();
            $table->unsignedInteger('nbrPlaces');
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('buses');
    }
};
// php artisan migrate --path=.\database\migrations\2024_05_05_122009_create_buses_table.php
