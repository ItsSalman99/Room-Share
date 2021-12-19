<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
class DashboardController extends Controller
{

    // We can also paas our middlewares in constructor.
    // For now you can find all of the assigned middlewares in web.php routes.
    // ...
    // public function __construct() {
    //     $this->middleware('auth');
    //     $this->middleware('verified');
    // }

    public function index()
    {
        $rooms = Room::paginate(9);

        return view('dashboard.index')->with(['rooms'=>$rooms]);

    }
    public function addrooms()
    {
        return view('dashboard.addrooms');
    }

    public function saverooms(Request $request)
    {
        $request->validate([
            'room_name' => 'string|required',
            'room_type' => 'string|required',
            'room_img' => 'image|mimes:jpeg,jpg',
            'total_occupancy' => 'integer|required',
            'total_bedrooms' => 'required',
            'total_bathrooms' => 'required',
            'room_summary' => 'required',
            'address' => 'required',
            'has_tv' => 'required',
            'has_kitchen' => 'required',
            'has_aircondition' => 'required',
            'has_heating' => 'required',
            'has_internet' => 'required',
            'price' => 'required',

        ]);
        dd($request);

        // Room::create([
        //     'room_name' => $request->room_name,
        //     'home_type' => $request->home_type,
        //     'room_img' => $request->room_img,
        //     'total_occupancy' => $request->total_occupancy,
        //     'total_bedrooms' => $request->total_bedrooms,
        //     'total_bathrooms' => $request->total_bathrooms,
        //     'room_summary' => $request->room_summary,
        //     'address' => $request->address,
        //     'has_tv' => $request->has_tv,
        //     'has_kitchen' => $request->has_kitchen,
        //     'has_aircondition' => $request->has_aircondition,
        //     'has_heating' => $request->has_heating,
        //     'has_internet' => $request->has_internet,
    }
}
