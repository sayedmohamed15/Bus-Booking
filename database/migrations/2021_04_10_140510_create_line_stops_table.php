<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLineStopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('line_stops', function (Blueprint $table) {
            $table->increments('stop_station_iD');
            $table->integer('line_code')->unsigned();
            $table->integer('station_code')->unsigned();
            $table->foreign('line_code')->references('line_code')->on('lines')->onDelete('cascade');
            $table->foreign('station_code')->references('station_code')->on('stations')->onDelete('cascade');
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
        Schema::dropIfExists('line_stops');
    }
}
