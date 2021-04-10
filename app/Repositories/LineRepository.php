<?php


namespace App\Repositories;


use App\Models\Lines;

class LineRepository
{
    /*
   * @var $line
   */
    protected $line;
    /*
     * Lines Constructor
     */
    public function __construct(Lines $line){
        $this->line = $line;

    }
    public function getById($array){
        extract($array);
        return $this->line::find($line_code)->LineStations()->where(['pickup_id'=>$pickup_id,'dropoff_id'=>$dropoff_id])->get()->toArray();
    }

}
