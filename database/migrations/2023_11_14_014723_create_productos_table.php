<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    /**
     * Creates a new table called "productos" in the database schema.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("description");
            $table->string("image")->nullable();
            $table->string("brand")->nullable();
            $table->double('price')->nullable();
            $table->double('price_sale')->nullable();
            $table->string('category')->nullable();
            $table->integer('stock')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
