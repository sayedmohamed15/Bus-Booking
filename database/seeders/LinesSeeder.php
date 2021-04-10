<?php

namespace Database\Seeders;

use App\Models\Lines;
use App\Models\Stations;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class LinesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
//        $article = new Seats();
//        $article->seat_name = 's'.$i;
//        $article->bus_code = $bus_id->bus_code;
//        $article->save();
        $station_id1 = Stations::find(6);
        $station_id2 = Stations::find(3);
        $user = Lines::firstOrCreate(
            ['pickup_id' => $station_id1->station_code ],
            ['dropoff_id' => $station_id2->station_code]
        );

        $user->save();
    }
}
