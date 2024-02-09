<?php

namespace App\Http\Controllers;

use App\Models\LeaveCV;
use App\Models\Subscription;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $subs = Subscription::all();
        $cvs = LeaveCV::all();

        $loggedUser = auth()->user();

        $isAdmin = $loggedUser->role === 'admin';

        return view('home', compact('subs', 'cvs', 'isAdmin'));
    }
}
