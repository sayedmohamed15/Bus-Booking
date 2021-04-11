<?php


namespace App\Services;


use App\Repositories\LineStationRepository;

class LinesStationsService
{
    protected $lineStationsRepository;
    /*
    * @param LineRepository $lineStationsRepository
    */
    public function __construct(LineStationRepository $lineStationsRepository){
        $this->lineStationsRepository=$lineStationsRepository;
    }
    public function getById($id){
        return $this->lineStationsRepository->getById($id)[0];
    }
    public function getByColumn(array $where){
        return $this->lineStationsRepository->getByColumn($where);
        

    }

}
