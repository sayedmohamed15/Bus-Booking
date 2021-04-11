<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('line_station_id')->unsigned();
            $table->integer('seat_code')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('line_station_id')->references('id')->on('lines_stations')->onDelete('cascade');
            $table->foreign('seat_code')->references('seat_code')->on('seats')->onDelete('cascade');
            $table->timestamps();
            $table->primary(array('id', 'user_id','line_station_id','seat_code'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}
