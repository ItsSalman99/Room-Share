<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('dashboard');
    }
}
