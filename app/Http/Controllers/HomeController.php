<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $rooms = Room::inRandomOrder()->limit(9)->get();
        return view('pages.index')->with(['rooms' =>$rooms]);
    }
}
