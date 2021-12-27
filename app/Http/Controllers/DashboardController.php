<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

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
        if(Auth::user()->roles->first()->name == 'Admin'){
            $Tuser = User::count();
            $TRooms = Room::count();
            $TReservations = Reservation::count();

            return view('dashboard.admin.index')->with(['TotalUsers' => $Tuser, 'TotalRooms' => $TRooms, 'TotalReservations'=> $TReservations]);
        }
        else if(Auth::user()->roles->first()->name == 'Host'){
            $TRooms = Room::where('owner_id',Auth::user()->id)->count();
            $TReservations = Reservation::count();

            return view('dashboard.host.index')->with(['TotalRooms' => $TRooms, 'TotalReservations'=> $TReservations]);
        }

    }

    public function rooms()
    {
        if(Auth::user()->roles->first()->name == 'Admin'){
            $rooms = Room::orderBy('id')->simplePaginate(9);

            return view('dashboard.rooms.index')->with(['rooms'=>$rooms]);
        }
        else if(Auth::user()->roles->first()->name == 'Host'){
            $rooms = Room::where('owner_id',Auth::user()->id)->simplePaginate(9);

            return view('dashboard.host.rooms')->with(['rooms'=>$rooms]);
        }
    }

    public function addrooms()
    {
        if(Auth::user()->roles->first()->name == 'Host'){
            return view('dashboard.host.addrooms');
        }
    }

    public function profile()
    {
        return view('dashboard.profile');
    }
}
