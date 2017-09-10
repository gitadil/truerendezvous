<?php

namespace App\Http\Controllers;

use App\Models\ContactInformation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactInformationController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }

    Public function create(Request $request)
    {
        $contactInfo = ContactInformation::where('user_id', Auth::user()->guid)->first();
        if(empty($contactInfo))
        {
            $contactInfo=new ContactInformation();
        }
        $dropdowns    = self::BindDropDowns();
        return        view('profile.contact.contactinformation')->with('Model',$contactInfo)->with('dropdowns',$dropdowns);
    }

    Public function store(Request $request)
    {
        $contactInfo = new ContactInformation();
        $contactInfo->cell_number         = (!empty($request->cell_number)) ? $request->cell_number: '';
        $contactInfo->phone_number               = (!empty($request->phone_number)) ? $request->phone_number : '';
        $contactInfo->city =                      (!empty($request->city)) ? $request->city: '';
        $contactInfo->country_id       = (!empty($request->country_id)) ? $request->country_id: '';
        $contactInfo->address            = (!empty($request->address)) ? $request->address: '';
        $contactInfo->user_id           = (!empty($request->user_id)) ? $request->user_id : '';
        $dropdowns = self::BindDropDowns();
        if(empty($request->id)) //Add
        {
            $contactInfo->user_id = Auth::user()->guid;
            $contactInfo->save();
            $message = 'Record Added Successfully';
            $heading = 'Contact Information';
            return redirect('/contact')->with($message, $heading);
        }
        else //Update
        {
            $affectedRows = ContactInformation::where('user_id', '=', Auth::user()->guid)
                ->update(array('cell_number' =>$contactInfo->cell_number,
                        'phone_number' =>$contactInfo->phone_number,
                        'city' =>$contactInfo->city,
                        'country_id' =>$contactInfo->country_id,
                        'address' =>$contactInfo->address
                    )
                );
            $message = 'Record Updated Successfully';
            $heading = 'Contact Information';
            return redirect('/contact')->with($message, $heading,$dropdowns);
        }
    }

}
