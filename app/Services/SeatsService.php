<?php


namespace App\Services;


use App\Repositories\SeatsRepository;

class SeatsService
{
    protected $seatsRepository;
    /*
     * @param SeatsRepository $seatsRepository
     */
    public function __construct(SeatsRepository $seatsRepository){
        $this->seatsRepository=$seatsRepository;
    }
    public function getAll(){
        return $this->seatsRepository->getAllSeats();
    }
}
