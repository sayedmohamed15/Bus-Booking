<?php


namespace App\Repositories;
use App\Models\Booking;
use http\Exception\InvalidArgumentException;
use Illuminate\Validation\Validator;


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
    public function save($data){
        $booking = new $this->booking;
        $booking->user_id = $data['user_id'];
        $booking->line_station_id = $data['line_station_id'];
        $booking->seat_code = $data['seat_code'];
        $booking->save();

    }

}
