<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviewsTable extends Migration
{
    
    public function up()
    {
       Schema::create('reviews', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('rating');
            $table->string('reviews_comments');
            $table->unsignedBigInteger('product_id');
            $table->timestamps();
            
            $table->foreign('product_id')
                ->references('id')
                ->on('products')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('reviews');
    }
}
