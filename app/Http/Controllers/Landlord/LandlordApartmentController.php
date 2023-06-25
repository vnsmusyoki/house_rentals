<?php

namespace App\Http\Controllers\Landlord;

use App\Http\Controllers\Controller;
use App\Models\Apartment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Brian2694\Toastr\Facades\Toastr;

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
        $checkapartment = Apartment::where('landlord_id', auth()->user()->id)->where('apartment_name', 'LIKE', '%' . $request->apartment_name . '%')->first();
        if ($checkapartment) {
            Toastr::warning('Seems you already have another apartment under the same name. Please confirm before trying again.', 'Hey', ["positionClass" => "toast-top-center"]);
            return redirect()->back();
        } else {

            $timenows = time();
            $checknums = "1234567898746351937463790";
            $checkstrings = "QWERTYUIOPLKJHGFDSAZXCVBNMmanskqpwolesurte191827273jkskalqKNJAHSGETWIOWKSNXJNEUDNEKDKSMKIDNUENDNXKSKEJNEJHCBRFGEWVJHBKWJEBFRNKWJENFECKWLERKJFNRKEHBJWEiwjWSIWMSWISWQOQOAWSAMJENEJEEDEWSSRFRFTHUJOKMNZBXVCX";
            $checktimelengths = 10;
            $checksnumlengths = 5;
            $checkstringlength = 5;
            $randnums = substr(str_shuffle($timenows), 0, $checktimelengths);
            $randstrings = substr(str_shuffle($checknums), 0, $checksnumlengths);
            $randcheckstrings = substr(str_shuffle($checkstrings), 0, $checkstringlength);
            $totalstring = str_shuffle($randcheckstrings . "" . $randnums . "" . $randstrings);

            $add = new Apartment();
            $add->landlord_id = auth()->user()->id;
            $add->apartment_type_id = $request->apartment_type;
            $add->apartment_name = $request->apartment_name;
            $add->latitude = $request->apartment_name;
            $add->longitude = $request->apartment_name;
            $add->address = $request->apartment_name;
            $add->address = $request->apartment_name;
            $fileNameWithExt = $request->apartment_photo->getClientOriginalName();
            $fileName =  pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $Extension = $request->apartment_photo->getClientOriginalExtension();
            $filenameToStore = $fileName . '-' . time() . '.' . $Extension;
            $path = $request->apartment_photo->storeAs('apartments', $filenameToStore, 'public');
            $add->picture = $filenameToStore;
            $add->slug = $totalstring;
            $add->approval_status = "approved";
            $add->save();

            Toastr::success('You have successfully uploaded your first apartment.', 'Congratulations'. auth()->user()->name, ["positionClass" => "toast-top-right"]);
            return to_route('home');
        }

    }
}
