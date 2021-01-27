<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePharmaciesTable extends Migration
{
    public function up()
    {
        Schema::create('pharmacies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('phone');
            $table->string('emial');
            $table->string('site');
            $table->string('working_time');
            $table->unsignedBigInteger('street_id');
            $table->timestamps();

            $table->foreign('street_id')
                ->references('id')
                ->on('streets')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('pharmacies');
    }
}
