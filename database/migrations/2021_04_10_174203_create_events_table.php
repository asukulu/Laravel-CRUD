<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('title');
           // $table->text('picture_path');
            $table->string('description' , 1000);
            $table->float('price')->unsigned();
            $table->string('stock')->unsigned();
            $table->string('status')->default('unavailable');
            $table->string('venue')->unsigned();
           // $table->string('duration');
           // $table->string('duration');
           // $table->dateTime('event_date');
            

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
        Schema::dropIfExists('events');
    }
}
