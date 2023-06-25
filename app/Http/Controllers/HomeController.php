<?php

namespace App\Http\Controllers;

use App\Models\Apartment;
use App\Models\ApartmentType;
use App\Models\User;
use Illuminate\Http\Request;

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
        $loggedinuser = User::where('id', auth()->user()->id)->first();
        $assignedrole = $loggedinuser->getRoleNames()->first();
        if ($assignedrole == "landlord") {
            $apartments = Apartment::where('landlord_id', $loggedinuser->id)->get();
            if ($apartments->count() >= 1) {
                return view('home', compact('apartments'));
            } else {
                $apartmenttypes = ApartmentType::select('id', 'apartment_type')->get();
                return view('admin.apartments.create-new-apartment', compact('apartmenttypes'));
            }
        } else {
            return view('home');
        }
    }
}
