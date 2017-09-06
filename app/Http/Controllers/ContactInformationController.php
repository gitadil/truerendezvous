<?php

namespace App\Http\Controllers;

use App\ContactInformation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class ContactInformationController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }

    Public function create(Request $request)
    {
        $contactInfo = new ContactInformation();
        if(empty($request->id))
        {
            $contactInfo->id=0;
        }
        else
        {
            $contactInfo = ContactInformation::find($request->id);
        }
        $dropdowns= $this->BindDropDowns();

        return view('profile.contactinformation')->with('Model',$contactInfo)->with('dropdowns',$dropdowns);
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

        if(empty($request->id)) //Add
        {
            $contactInfo->save();
            $message = 'Record Added Successfully';
            $heading = 'Contact Information';
            return redirect('/contactinformation')->with($message, $heading);
        }
        else //Update
        {
            $contactInfo = PersonalInformation::find($request->id);
            $contactInfo->save();
            $message = 'Record Added Successfully';
            $heading = 'Contact Information';
            return redirect('/contactinformation')->with($message, $heading);
        }
    }

    private  function BindDropDowns()
    {
        $dropdowns=new  stdclass();
        //DropDowns
        $dropdowns->countries    = Config::get('enums.nationality');
        return $dropdowns;
    }

}
