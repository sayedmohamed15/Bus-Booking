<?php

namespace Database\Seeders;

use App\Models\Buses;
use Illuminate\Database\Seeder;

class BusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bus = new Buses();
        $bus->bus_name = 'b1';
        $bus->total_seats = 12;
        $bus->save();

    }
}
