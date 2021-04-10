<?php


namespace App\Services;


use App\Repositories\LineStopsRepository;

class LineStopsService
{
    protected $lineStopsRepository;
    /*
    * @param LineRepository $lineStationsRepository
    */
    public function __construct(LineStopsRepository $lineStopsRepository){
        $this->lineStopsRepository=$lineStopsRepository;
    }
    public function getById($id){
        return $this->lineStopsRepository->getById($id)[0];
    }

}
