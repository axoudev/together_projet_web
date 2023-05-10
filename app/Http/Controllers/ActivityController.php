<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use activity model
use App\Models\Activity;
use Inertia\Inertia;

class ActivityController extends Controller
{
    //get all
    public function index()
    {
        $activities = Activity::with(['category', 'user'])->withCount('participants')->get();

        return Inertia::render('Dashboard', [
            'activities' => $activities,
        ]);
    }

    public function activitiesWithDistances(Request $request)
    {
        $userLat = floatval($request->input('lat'));
        $userLon = floatval($request->input('lon'));

        $activities = Activity::with(['category', 'user'])->withCount('participants')->get();

        foreach ($activities as $activity) {
            $activity->distance = $this->distance($userLat, $userLon, floatval($activity->lat), floatval($activity->lon));
        }
        
        return response()->json($activities);
    }

    function distance($userLat, $userLon, $activityLat, $activityLon) {
        $earthRadius = 6371; // Rayon moyen de la Terre en kilomètres
    
        // Conversion des degrés en radians
        $userLat = deg2rad($userLat);
        $userLon = deg2rad($userLon);
        $activityLat = deg2rad($activityLat);
        $activityLon = deg2rad($activityLon);
    
        // Calcul des différences de latitude et de longitude
        $deltaLat = $activityLat - $userLat;
        $deltaLon = $activityLon - $userLon;
    
        // Calcul de la distance orthodromique selon la formule de Haversine
        $a = sin($deltaLat/2) * sin($deltaLat/2) + cos($userLat) * cos($activityLat) * sin($deltaLon/2) * sin($deltaLon/2);
        $c = 2 * atan2(sqrt($a), sqrt(1-$a));
        $distance = $earthRadius * $c;
    
        return $distance;
    }

}
