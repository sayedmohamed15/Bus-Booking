<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seats extends Model
{
    use HasFactory;
    protected $primaryKey='seat_code';
    protected $guarded=['seat_code'];
    public function SeatsBooked(){
//        return $this->belongsToMany(Sta::class,null,'role_ids','privilege_ids');
        return $this->hasMany(Booking::class,'seat_code','seat_code');
    }
}
