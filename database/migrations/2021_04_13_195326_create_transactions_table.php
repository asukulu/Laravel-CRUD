<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
/*
    
  
    @param string|array $columns
    
    @param string|null $name
    
    @return \Illuminate\Database\Schema\ForeignKeyDefinition
*/


    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('status')->default('pending');
            $table->bigInteger('student_id')->unsigned();
            $table->timestamps();
// this is a one to many relationship. one student can have many orders(bookings), and one order(booking or ticket, place) can have one student.
           $table->foreign('student_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
