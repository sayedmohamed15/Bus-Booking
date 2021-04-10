<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLinesStationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lines_stations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('line_code')->unsigned();
            $table->integer('pickup_id')->unsigned();
            $table->integer('dropoff_id')->unsigned();
            $table->foreign('line_code')->references('line_code')->on('lines')->onDelete('cascade');
            $table->foreign('pickup_id')->references('station_code')->on('stations')->onDelete('cascade');
            $table->foreign('dropoff_id')->references('station_code')->on('stations')->onDelete('cascade');
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
        Schema::dropIfExists('lines_stations');
    }
}
