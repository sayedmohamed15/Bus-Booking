<?php

namespace Database\Seeders;

use App\Models\Lines;
use App\Models\LinesStations;
use App\Models\Stations;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class LinesStationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $lone_code = Lines::find(1);
        $station_id1 = Stations::find(6);
        $station2 = Stations::find(9);
        $line_station = new LinesStations();
        $line_station->line_code=$lone_code->line_code;
        $line_station->pickup_id=$station_id1->station_code;
        $line_station->dropoff_id=$station2->station_code;
        $line_station->save();

        $station_id1 = Stations::find(6);
        $station2 = Stations::find(16);
        $line_station = new LinesStations();
        $line_station->line_code=$lone_code->line_code;
        $line_station->pickup_id=$station_id1->station_code;
        $line_station->dropoff_id=$station2->station_code;
        $line_station->save();

        $station_id1 = Stations::find(6);
        $station_id2 = Stations::find(3);
        $line_station = new LinesStations();
        $line_station->line_code=$lone_code->line_code;
        $line_station->pickup_id=$station_id1->station_code;
        $line_station->dropoff_id=$station_id2->station_code;
        $line_station->save();
        $station_id1 = Stations::find(9);
        $station_id2 = Stations::find(16);
        $line_station = new LinesStations();
        $line_station->line_code=$lone_code->line_code;
        $line_station->pickup_id=$station_id1->station_code;
        $line_station->dropoff_id=$station_id2->station_code;
        $line_station->save();

        $station_id1 = Stations::find(9);
        $station_id2 = Stations::find(3);
        $line_station = new LinesStations();
        $line_station->line_code=$lone_code->line_code;
        $line_station->pickup_id=$station_id1->station_code;
        $line_station->dropoff_id=$station_id2->station_code;
        $line_station->save();
        $station_id1 = Stations::find(16);
        $station_id2 = Stations::find(3);
        $line_station = new LinesStations();
        $line_station->line_code=$lone_code->line_code;
        $line_station->pickup_id=$station_id1->station_code;
        $line_station->dropoff_id=$station_id2->station_code;
        $line_station->save();
    }
}
