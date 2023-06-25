<?php

namespace App\Http\Controllers\Landlord;

use App\Http\Controllers\Controller;
use App\Models\Apartment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LandlordApartmentController extends Controller
{


    public function storeapartment(Request $request)
    {


        $this->validate($request, [
            'apartment_name' => 'required|string|min:3',
            'apartment_photo' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'apartment_type' => 'required',
            'address_address' => 'required',
            'address_latitude' => 'required',
            'address_longitude' => 'required',
            'location_description' => 'required'
        ], [
            'address_latitude.required' => 'Please make sure you have selected your address',
            'address_address.required' => 'Please select the nearest landmark on the map to your appartment',
        ]);

        $checkapartment = Apartment::where('landlord_id', auth()->user()->id)->where('apartment_name', 'LIKE', '%'.$request->apartment_name.'%')->first();
        if ($checkapartment){

        }else{
            
        }
    }
}
