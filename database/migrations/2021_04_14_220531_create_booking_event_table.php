<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingEventTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking_event', function (Blueprint $table) {
            $table->bigInteger('booking_id')->unsigned();
            $table->bigInteger('event_id')->unsigned();

            $table->integer('quantity')->unsigned();
           // $table->morphs('transactiontable');

           $table->foreign('booking_id')->references('id')->on('orders');
            $table->foreign('event_id')->references('id')->on('events');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('booking__event');
    }
}
