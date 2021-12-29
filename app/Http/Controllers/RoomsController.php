<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class RoomsController extends Controller
{

    public function SearchByCity(Request $request)
    {
        $rooms = Room::where('city', $request->city)->paginate(9);

        return view('pages.rooms')->with(['rooms' => $rooms]);

    }

    public function Create(Request $request)
    {
        //Validation input requests
        $request->validate([
            'room_name' => 'string|required',
            'room_type' => 'string|required',
            'room_img' => 'image|mimes:jpeg,jpg',
            'total_occupancy' => 'integer|required',
            'total_bedrooms' => 'required',
            'total_bathrooms' => 'required',
            'room_summary' => 'required',
            'address' => 'required',
            'city' => 'required',
            'has_tv' => 'required',
            'has_kitchen' => 'required',
            'has_aircondition' => 'required',
            'has_heating' => 'required',
            'has_internet' => 'required',
            'price' => 'required',

        ]);

        //Checking & Storing file in server
        if ($request->hasFile('room_img')) {
            $filename = $request->room_img->getClientOriginalName();

            $request->room_img->storeAs('rooms', $filename, 'public');
            

        }

        //dd($request);

        //Creating Room Data
        Room::create([
            'room_name' => $request->room_name,
            'home_type' => $request->room_type,
            'img' => $filename,
            'total_occupancy' => $request->total_occupancy,
            'total_bedrooms' => $request->total_bedrooms,
            'total_bathrooms' => $request->total_bathrooms,
            'summary' => $request->room_summary,
            'description' => $request->room_description,
            'city' => $request->city,
            'address' => $request->address,
            'has_tv' => $request->has_tv,
            'has_kitchen' => $request->has_kitchen,
            'has_air_con' => $request->has_aircondition,
            'has_heating' => $request->has_heating,
            'has_internet' => $request->has_internet,
            'price' => $request->price,
            'owner_id' => Auth::user()->id,
        ]);

        return redirect()->route('addrooms')->withMessage('Room has been added successfully!');

    }

    public function deleteroom($id)
    {
        $room = Room::findOrFail($id);

        $room->delete();

        return redirect()->route('dashboard')->withMessage('Room has been deleted!');

    }

}
