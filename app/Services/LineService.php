<?php


namespace App\Services;

use App\Repositories\LineRepository;
use Exception;

class LineService
{
    protected $lineRepository;
    /*
    * @param LineRepository $lineRepository
    */
    public function __construct(LineRepository $lineRepository){
        $this->lineRepository=$lineRepository;
    }
    public function getById($array){
        return $this->lineRepository->getById($array)[0];
    }

}
