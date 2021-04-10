<?php

namespace Database\Seeders;

use App\Models\Stations;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class StationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $station = new Stations();
        $station->station_name = 'Alexandria';
        $station->save();
        $station = new Stations();
        $station->station_name = 'Aswan';
        $station->save();
        $station = new Stations();
        $station->station_name = 'Asyut';
        $station->save();
        $station = new Stations();
        $station->station_name = 'Beheira';
        $station->save();
        $station = new Stations();
        $station->station_name = 'Beni Suef';
        $station->save();
        $station = new Stations();
        $station->station_name = 'Cairo';
        $station->save();
        $station = new Stations();
        $station->station_name = 'Dakahlia';
        $station->save();
        $station = new Stations();
        $station->station_name = 'Damietta';
        $station->save();
        $station = new Stations();
        $station->station_name = 'Faiyum';
        $station->save();
        $station = new Stations();
        $station->station_name = 'Gharbia';
        $station->save();
        $station = new Stations();
        $station->station_name = 'Giza';
        $station->save();
        $station = new Stations();
        $station->station_name = 'Ismailia';
        $station->save();
        $station = new Stations();
        $station->station_name = 'Kafr El Sheikh';
        $station->save();
        $station = new Stations();
        $station->station_name = 'Luxor';
        $station->save();
        $station = new Stations();
        $station->station_name = 'Matruh';
        $station->save();
        $station = new Stations();
        $station->station_name = 'Minya';
        $station->save();
        $station = new Stations();
        $station->station_name = 'Monufia';
        $station->save();
        $station = new Stations();
        $station->station_name = 'New Valley';
        $station->save();
        $station = new Stations();
        $station->station_name = 'North Sinai';
        $station->save();
        $station = new Stations();
        $station->station_name = 'Port Said';
        $station->save();
        $station = new Stations();
        $station->station_name = 'Qalyubia';
        $station->save();
        $station = new Stations();
        $station->station_name = 'Qena';
        $station->save();
        $station = new Stations();
        $station->station_name = 'Red Sea';
        $station->save();
        $station = new Stations();
        $station->station_name = 'Sharqia';
        $station->save();
        $station = new Stations();
        $station->station_name = 'Sohag';
        $station->save();
        $station = new Stations();
        $station->station_name = 'South Sinai';
        $station->save();
        $station = new Stations();
        $station->station_name = 'Suez';
        $station->save();

    }
}
