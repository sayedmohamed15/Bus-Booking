<?php


namespace App\Repositories;


use App\Models\LineStops;

class LineStopsRepository
{
    /*
   * @var $booking
   */
    protected $lineStops;
    /*
     * BookingRepository Constructor
     */
    public function __construct(LineStops $lineStops){
        $this->lineStops = $lineStops;

    }
    public function getById($id){
        return $this->lineStops::where('station_code',$id)->get()->toArray();
    }

}
