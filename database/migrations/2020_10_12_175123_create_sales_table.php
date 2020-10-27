<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('initial_sales');
            $table->unsignedBigInteger('pharmacy_id');
            $table->boolean('stock')->default('0');
            $table->unsignedBigInteger('product_id');
            $table->integer('sold_quantity');
            $table->timestamps();
            $table->foreign('pharmacy_id')
                ->references('id')
                ->on('pharmacies');
            $table->foreign('product_id')
                ->references('id')
                ->on('products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sales');
    }
}
