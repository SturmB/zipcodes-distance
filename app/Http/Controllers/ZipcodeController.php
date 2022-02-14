<?php

namespace App\Http\Controllers;

use App\Models\Zipcode;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class ZipcodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        return view("home");
    }

    private function calculateDistance(string $from, string $to): float
    {
        // Initialize the earth's radius in km.
        $earthRadius = 6371;

        // Get the latitude and longitude for each zip code.
        $fromModel = Zipcode::where("zip", $from)->first();
        $toModel = Zipcode::where("zip", $to)->first();
        $latFrom = deg2rad($fromModel->latitude);
        $latTo = deg2rad($toModel->latitude);
        $lonFrom = deg2rad($fromModel->longitude);
        $lonTo = deg2rad($toModel->longitude);

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

    public function getDistance(Request $request): float
    {
        // Initialize the total distance and get the ZIP codes.
        $totalDistance = 0;
        $zipcodes = $request->input("zipcodes");

        // If we don't have at least 2 zip codes, there is no distance.
        if (count($zipcodes) < 2) {
            return 0;
        }

        // Get the distance between each pair of zip codes and total them up.
        for ($i = 0; $i < count($zipcodes) - 1; $i++) {
            $thisDistance = $this->calculateDistance(
                $zipcodes[$i],
                $zipcodes[$i + 1]
            );
            $totalDistance += $thisDistance;
        }
        return $totalDistance;
    }
}
