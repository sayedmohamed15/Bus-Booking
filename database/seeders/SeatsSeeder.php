<?php

namespace Database\Seeders;

use App\Models\Buses;
use App\Models\Seats;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class SeatsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $bus_id = Buses::find(1);
        for($i=1; $i<=12;$i++){
            $article = new Seats();
            $article->seat_name = 's'.$i;
            $article->bus_code = $bus_id->bus_code;
            $article->save();
        }

    }
}
