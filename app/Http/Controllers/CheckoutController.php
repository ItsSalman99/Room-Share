<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function Confirmbooking()
    {
        //Checking profile is empty or not?
        $chckPrrofile = Profile::where('user_id',Auth::user()->id)->first();
        
        if ($chckPrrofile == null) {
            return view('dashboard.user.profile');
        }
        else{
            return redirect()->route('pay');
        }
    }

    public function payview()
    {
        return view('dashboard.user.pay');
    }

    public function confirmPay(Request $request)
    {
        $request->validate([
            'start_date' => ['required'],
            'end_date' => ['required'],
            'guests' => ['required'],
            'price' => ['required'],
            'total' => ['required'],
            'paytype' => ['required'],            
        ]);

        Reservation::create([
            'user_id' => Auth::user()->id,
            'room_id' => $request->room_id,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'guests' => $request->guests,
            'price' => $request->price,
            'total' => $request->total,
            'paytype' => $request->paytype
        ]);

        return view('checkout.welcomecheckout');

    }

}
