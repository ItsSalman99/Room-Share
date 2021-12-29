<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\Reservation;
use App\Models\Room;
use App\Models\User;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class CustomerController extends Controller
{

    // public function myreservations()
    // {
    //     $reservations = Reservation::where('user_id', Auth::user()->id)->paginate(8);


    //     return view('dashboard.user.reservations')->with(['reservations' => $reservations]);
    // }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);


        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $user->attachRole('User');

        Auth::login($user);

        if ($user != null and Auth::check()) {
            return redirect()->route('customerprofile')->withMessage('You are logged in successfully!');   
        }
        else{
            return redirect()->route('reservation')->withMessage('Logged in error!');
        }

    }

    public function profile(Request $request)
    {
        //Checking profile is empty or not?
        $chckPrrofile = Profile::where('user_id',Auth::user()->id)->first();

        if ($chckPrrofile == null) {
            if (Auth::check()) {
            
                $request->validate([
                    'number' => ['required', 'max:11'],
                    'bday' => ['required'],
                    'address' => ['required'],
                    'avatar' => ['required', 'mimes:png']            
                ]);
    
                $profile = Profile::create([
                    'user_id' => Auth::user()->id,
                    'contactno' => $request->number,
                    'birth' => $request->bday,
                    'address' => $request->address,
                    'avatar' => $request->avatar
                ]);

                //Checking & Storing file in server
                if ($request->hasFile('avatar')) {
                    $filename = $request->avatar->getClientOriginalName();

                    $request->avatar->storeAs('avatar', $filename, 'public');

                }
    
                return redirect()->route('pay');
            }
            else{
                return redirect()->route('reservation')->withMessage('You are not logged in!');
            }
    
        }
        else{
            return redirect()->route('pay');
        }
    }



}
