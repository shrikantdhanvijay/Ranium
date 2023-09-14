<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Redirect;
use App\Http\Services\HomeService;
use Illuminate\Support\Arr;

class AsteroidController extends Controller
{
    public $homeService;

    /**
     * automatic load when class object create
     *
     */
    public function __construct()
    {
        $this->homeService = new HomeService();
    }

    /**
     * Show dashboard page
     *
     */
    public function dashboard()
    {
        return view('dashboard');
    }

    /**
     * Show Asteroids Neo Ws Data
     *
     */
    public function getAsteroid(Request $request)
    {

        if (empty($request->start_date) && empty($request->end_date)) {
            return redirect()->back()->with('error', "Please select date.");
        }
        $difference = $this->homeService->daysCalculate($request);

        if ($difference < 0) {
            return redirect()->back()->with('error', "Start date should be less than end date.");
        }

        try {

            $response = $this->homeService->getAsteroidsNeoWsData($request->start_date,$request->end_date);
            
            return view('asteroid')->with([
                'fastestAsteroid' => $response['fastest'],
                'closestAsteroid' => $response['closest'],
                'asteroidAvgSize' =>  $response['avgSize'],
                'datesAsteroid' =>  $response['dates'],
                'countAsteroid' => $response['count'],
            ]);
            
        } catch (\Exception $e) {
            $error = $e->getMessage();
            return redirect()->back()->with($error);
        }
        
    }
}
