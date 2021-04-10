<?php

namespace Database\Seeders;

use App\Models\Lines;
use App\Models\LineStops;
use App\Models\Stations;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class LineStopsSeeder extends Seeder
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
        $line_stops = new LineStops();
        $line_stops->line_code=$lone_code->line_code;
        $line_stops->station_code=$station_id1->station_code;
        $line_stops->save();

        $station_id1 = Stations::find(9);
        $line_stops = new LineStops();
        $line_stops->line_code=$lone_code->line_code;
        $line_stops->station_code=$station_id1->station_code;
        $line_stops->save();

        $station_id1 = Stations::find(16);
        $line_stops = new LineStops();
        $line_stops->line_code=$lone_code->line_code;
        $line_stops->station_code=$station_id1->station_code;
        $line_stops->save();

        $station_id1 = Stations::find(3);
        $line_stops = new LineStops();
        $line_stops->line_code=$lone_code->line_code;
        $line_stops->station_code=$station_id1->station_code;
        $line_stops->save();

    }
}
