<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $rooms = Room::inRandomOrder()->limit(6)->get();
        return view('pages.index')->with(['rooms' =>$rooms]);
    }

    public function rooms()
    {
        $rooms = Room::paginate(9);

        return view('pages.rooms')->with(['rooms'=>$rooms]);
    }

    public function room($id)
    {
        $room = Room::findOrFail($id);

        return view('pages.room')->with(['room' => $room]);

    }

}
