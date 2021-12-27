<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class ReservationsController extends Controller
{

    public function index()
    {

        return view('pages.reservation');
    }

    public function ReserveRoom(Request $request)
    {
        if (Cart::count() > 0) {
            Cart::destroy();
        }
        else if (Cart::count() == 0)
        {
            $room = Room::findOrfail($request->roomId);

            $cart = Cart::add($room->id,$room->room_name,1,$room->price);
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
