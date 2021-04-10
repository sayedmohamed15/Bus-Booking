<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    public function BookingLineStation(){
//        return $this->belongsToMany(Sta::class,null,'role_ids','privilege_ids');
        return $this->hasMany(LinesStations::class,'line_station_id','line_code');
    }
}
