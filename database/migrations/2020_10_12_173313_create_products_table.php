<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            // Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('slug')->unique();
            $table->unsignedBigInteger('category_id');
            $table->string('composition');
            $table->unsignedBigInteger('region_id');
            $table->string('packing_quantity');
            $table->integer('weight');
            $table->string('product_measurement');
            $table->string('picture')->nullable();
            $table->unsignedBigInteger('pharmacy_id');
            $table->timestamps();

            $table->foreign('region_id')
                ->references('id')
                ->on('regions');
            $table->foreign('pharmacy_id')
                ->references('id')
                ->on('pharmacies');
            $table->foreign('category_id')
                ->references('id')
                ->on('categories')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
