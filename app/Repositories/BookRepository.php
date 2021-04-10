<?php


namespace App\Repositories;
use App\Models\Booking;


class BookRepository
{
    /*
     * @var $booking
     */
    protected $booking;
    /*
     * BookingRepository Constructor
     */
    public function __construct(Booking $booking){
        $this->booking = $booking;

    }
    public function getById($id){
        return $this->line::find($id)->BookingLineStation()->get()->toArray();
    }

}
