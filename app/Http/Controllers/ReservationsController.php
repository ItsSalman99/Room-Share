<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Room;
use App\Models\User;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ReservationsController extends Controller
{

    public function index()
    {
        return view('pages.reservation');
    }

    public function myreservations()
    {
        if(Auth::user()->roles->first()->name == 'Admin'){
            $reservations = Reservation::paginate(8);

            return view('dashboard.admin.reservations')->with(['reservations' => $reservations]);
        }
        else if(Auth::user()->roles->first()->name == 'Host'){
            $reservations = Reservation::where('room_id',Auth::user()->id)->paginate(8);

            return view('dashboard.host.reservations')->with(['reservations' => $reservations]);
        }
        else if(Auth::user()->roles->first()->name == 'User'){
            $reservations = Reservation::where('user_id', Auth::user()->id)->paginate(8);
            return view('dashboard.user.reservations')->with(['reservations' => $reservations]);
        }
    }

    public function ReserveRoom(Request $request)
    {

        $request->validate([
            'roomId' => ['required'],
            'start_date' => ['required'],
            'end_date' => ['required'],
            'tguest' => ['required',]
        ]);

        if (Cart::count() > 0) {
            Cart::destroy();
        }
        if (Cart::count() == 0)
        {
            $room = Room::findOrfail($request->roomId);

            $owner = User::where('id', $room->owner_id)->first();

            $days = $room->calcDays($request->start_date, $request->end_date);

            $cart = Cart::add($room->id,$room->room_name,1,($room->price*$days), [
                'start_date' => $request->start_date, 
                'end_date' => $request->end_date,
                'img' => $room->img, 
                'city' => $room->city, 
                'guest'=> $request->tguest, 
                'owner' => $owner->name
            ]);
        }
        return redirect()->route('reservation')->withMessage('You have successfully reserve a room');
    }

    public function destroyReservation()
    {
        Cart::destroy();

        $rooms = Room::paginate(9);

        return view('pages.rooms')->with(['rooms'=>$rooms]);

    }

}
