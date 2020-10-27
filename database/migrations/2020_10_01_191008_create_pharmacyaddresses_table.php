<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePharmacyaddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pharmacyaddresses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('nr_house');
            $table->unsignedBigInteger('street_id');
            $table->string('bloc');
            $table->foreign('street_id')
                ->references('id')
                ->on('streets');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pharmacyaddresses');
    }
}
