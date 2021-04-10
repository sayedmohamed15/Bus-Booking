<?php


namespace App\Repositories;


use App\Models\Seats;
use App\Services\BookService;

class SeatsRepository
{
    /*
 * @var $booking
 */
    protected $seats;
    protected $lineStations;
    /*
     * SeatsRepository Constructor
     */
    public function __construct(Seats $seats){
        $this->seats = $seats;
    }
    public function getAllSeats(){
        return$this->seats::with('SeatsBooked')->get()->toArray();
    }

}
