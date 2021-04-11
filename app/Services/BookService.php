<?php


namespace App\Services;
use App\Repositories\BookRepository;
use Http\Exception;
use http\Exception\InvalidArgumentException;
use Illuminate\Validation\Validator;


class BookService
{

    protected $bookRepository;
    /*
     * @param BookRepository $bookRepository
     */
    public function __construct(BookRepository $bookRepository){
        $this->bookRepository=$bookRepository;
    }
    public function getById($id){
        return $this->bookRepository->getById($id);
    }
    public function saveBookingData($data){
        $validator = \Illuminate\Support\Facades\Validator::make($data,[
            'user_id'=>'required|integer',
            'line_station_id'=>'required|integer',
            'seat_code'=>'required|integer'
        ]);
        if($validator->fails()){
            throw new \InvalidArgumentException($validator->errors()->first());
        }
        $result = $this->bookRepository->save($data);
        return $result;

    }


}
