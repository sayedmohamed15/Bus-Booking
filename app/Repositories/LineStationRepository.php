<?php


namespace App\Repositories;


use App\Models\LinesStations;

class LineStationRepository
{
    /*
 * @var $line
 */
    protected $lineStation;
    /*
     * Lines Constructor
     */
    public function __construct(LinesStations $lineStation){
        $this->lineStation = $lineStation;

    }
    public function getById($id){
        return $this->lineStation::where('id',$id)->get()->toArray();
    }

    public function getByColumn(array $where){
        return $this->lineStation::where($where)->get()->toArray();

    }

}
