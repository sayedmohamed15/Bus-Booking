<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stations extends Model
{
    use HasFactory;
    protected $primaryKey='station_code';
//    protected $guarded=['station_code'];
}
