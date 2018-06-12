<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOfferTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('manId');
            $table->integer('maxGirls');
            $table->dateTime('timeOfferStart');
            $table->float('timeOfferRange');
            $table->dateTime('timeOffer')->nullable();
            $table->dateTime('timeOfferReturn')->nullable();
            $table->string('place')->nullable();
            $table->string('city')->nullable();
            $table->text('placeAddress')->nullable();
            $table->text('descOffer')->nullable();
            $table->string('price')->nullable();
            $table->string('travelOption')->nullable();
            $table->boolean('offerType')->nullable();
            $table->boolean('status');
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
        Schema::dropIfExists('offer');
    }
}
