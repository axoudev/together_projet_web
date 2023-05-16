<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use activity model
use App\Models\Activity;
use App\Models\Category;
use Inertia\Inertia;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use GuzzleHttp\Client;

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

    public function show($id){
        $activity = Activity::find($id);
        $img = Storage::url($activity->image);
        $data = [
            'activityId' => $id,
            'image' => $img,
        ];
    
        return Inertia::render('Details', $data);
    }

    public function create()
    {
        $categories = Category::all();

        $data = [
            'categories' => $categories
        ];
        return Inertia::render('AddActivityForm', $data);
    }

    public function store(Request $request){

        $hour = getDate(strtotime($request->hour));
        $date = getDate(strtotime($request->date));
        $date['hours'] = $hour['hours'];
        $date['minutes'] = $hour['minutes'];
        // dd($date);

        $date_string = date('Y-m-d H:i:s', mktime($date['hours'], $date['minutes'], $date['seconds'], $date['mon'], $date['mday'], $date['year']));
        
        $img = Storage::disk('public')->put('activities', $request->file('image'));

        $user = Auth::id();
        $client = new Client();

        $response = $client->get('https://geocode.maps.co/search?q={'.$request->street.' '.$request->house_number.' '.$request->zip_code.' '.$request->city.' '.$request->country.'}');

        $data = json_decode($response->getBody()->getContents());

        $activity = new Activity;

        $activity->title = $request->title;
        $activity->category_id = $request->category_id;
        $activity->description = $request->description;
        $activity->user_id = $user;
        $activity->street = $request->street;
        $activity->house_number = $request->house_number;
        $activity->zip_code = $request->zip_code;
        $activity->city = $request->city;
        $activity->country = $request->country;
        $activity->date = $date_string;
        $activity->image_path = $request->image;
        $activity->image = $img;
        $activity->duration = $request->duration;
        $activity->nb_attendees = $request->nb_attendees;
        $activity->country = $request->country;
        $activity->lat = $data[0]->lat;
        $activity->lon = $data[0]->lon;

        $activity->save();
    }

    public function activitiesWithDistances(Request $request)
    {
        $userLat = floatval($request->input('lat'));
        $userLon = floatval($request->input('lon'));

        $activities = Activity::with(['category', 'user'])->withCount('participants')->get();

        foreach ($activities as $activity) {
            $activity->distance = $this->distance($userLat, $userLon, floatval($activity->lat), floatval($activity->lon));
            $activity->image_url = Storage::url($activity->image);
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
