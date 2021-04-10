<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lines extends Model
{
    use HasFactory;
    protected $primaryKey='line_code';
    public function LineStations(){
//        return $this->belongsToMany(Sta::class,null,'role_ids','privilege_ids');
        return $this->hasMany(LinesStations::class,'line_code','line_code');
    }
}
