<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRatingCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rating_comments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('food');
            $table->integer('cleanliness');
            $table->integer('comfort');
            $table->integer('location');
            $table->integer('service');
            $table->text('comment')->nullable();
            $table->float('total_rating');
            $table->integer('hotel_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->timestamps();
            $table->foreign('hotel_id')->references('id')->on('hotels')
                ->onDelete('restrict')
                ->onUpdate('restrict');
            $table->foreign('user_id')->references('id')->on('users')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rating_comment');
    }
}
