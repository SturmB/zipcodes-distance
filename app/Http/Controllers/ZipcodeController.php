<?php

namespace App\Http\Controllers;

use App\Models\Zipcode;
use Illuminate\Http\Request;

class ZipcodeController extends Controller
{
    private function calculateDistance(string $from, string $to): float
    {
        // Initialize the earth's radius in km.
        $earthRadius = 6371000;

        // Get the latitude and longitude for each zip code.
        $fromModel = Zipcode::where("zipcode", $from)->first();
        $toModel = Zipcode::where("zipcode", $to)->first();
        $latFrom = $fromModel->latitude;
        $latTo = $toModel->latitude;
        $lonFrom = $fromModel->longitude;
        $lonTo = $toModel->longitude;

        // Calculate the straight distances between the latitudes and longitudes.
        $latDelta = $latTo - $latFrom;
        $lonDelta = $lonTo - $lonFrom;

        // Use the Haversine formula to calculate the distance and return it.
        $angle =
            2 *
            asin(
                sqrt(
                    pow(sin($latDelta / 2), 2) +
                        cos($latFrom) * cos($latTo) * pow(sin($lonDelta / 2), 2)
                )
            );
        return $angle * $earthRadius;
    }

    public function getDistance(array $zipcodes): float
    {
        // Initialize the total distance.
        $totalDistance = 0;

        // If we don't have at least 2 zip codes, there is no distance.
        if (count($zipcodes) < 2) {
            return $totalDistance;
        }

        // Get the distance between each pair of zip codes and total them up.
        for ($i = 0; $i < count($zipcodes) - 1; $i++) {
            $thisDistance = $this->calculateDistance($zipcodes[$i], $zipcodes[$i + 1]);
            $totalDistance += $thisDistance;
        }
        return $totalDistance;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
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
     * @param  \App\Models\Zipcode  $zipcode
     * @return \Illuminate\Http\Response
     */
    public function show(Zipcode $zipcode)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Zipcode  $zipcode
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Zipcode $zipcode)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Zipcode  $zipcode
     * @return \Illuminate\Http\Response
     */
    public function destroy(Zipcode $zipcode)
    {
        //
    }
}
