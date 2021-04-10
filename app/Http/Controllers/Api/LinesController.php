<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Lines;
use App\Services\BookService;
use App\Services\LineService;
use App\Services\LinesStationsService;
use App\Services\LineStopsService;
use App\Services\SeatsService;
use Illuminate\Http\Request;
use Exception;

class LinesController extends Controller
{
    protected $lineService;
    protected $seatService;
    protected $lineStationsService;
    protected $lineStopsService;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(LineService $lineService,SeatsService $seatService,LinesStationsService $linesStationsService,LineStopsService $lineStopsService ){
        $this->lineService = $lineService;
        $this->seatService = $seatService;
        $this->linesStationsService = $linesStationsService;
        $this->lineStopsService = $lineStopsService;

    }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
//        extract($_POST);
        $result = ['status'=>200];
        $availableSeats = [];
        try {
//            $result['data']= $this->lineService->getById($_POST);
            $selectedSeat= $this->lineService->getById($_POST);
            $pickup_id_to_reserved = $this->lineStopsService->getById($selectedSeat['pickup_id'])['stop_station_iD'];
            $dropoff_id_to_reserved = $this->lineStopsService->getById($selectedSeat['dropoff_id'])['stop_station_iD'];
            $allseats = $this->seatService->getAll();
            foreach ($allseats as $allseat){
                $bookedSets = $allseat['seats_booked'];
                if(is_array($bookedSets) && !empty($bookedSets)){
                    foreach ($bookedSets as $key=>$seats){
                        $lineStation = $this->linesStationsService->getById($seats['line_station_id']);
                        $pickup_id_reserved = $this->lineStopsService->getById($lineStation['pickup_id'])['stop_station_iD'];
                        $dropoff_id_reserved = $this->lineStopsService->getById($lineStation['dropoff_id'])['stop_station_iD'];
                        if($pickup_id_to_reserved >= $dropoff_id_reserved || $dropoff_id_to_reserved <= $pickup_id_reserved){
                            if($key == 0 ){
                                array_push($availableSeats,$allseat);
                            }
                            elseif(in_array($allseat,$availableSeats)){
                                array_push($availableSeats,$allseat);
                            }
                        }
                    }

                }
                else{
                    array_push($availableSeats,$allseat);
                }

            }
            $result['data']=$availableSeats;
        }catch (Exception $e){
            $result=[
              'status'=>500,
                'message'=>$e->getMessage(),
            ];

        }
        return response()->json($result,$result['status']);


        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
