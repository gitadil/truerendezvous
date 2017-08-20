<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use App\PersonalInformation;


class PersonalInformationController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    Public function create()
    {
        $heading        = 'Personal Information';
        $gender         = Config::get('enums.gender');
        $marital_status = Config::get('enums.marital_status');
        $religion       = Config::get('enums.religion');
        $body_type      = Config::get('enums.body_type');
        $skin_tone      = Config::get('enums.skin_tone');
        $cast           = Config::get('enums.cast');
        $mother_tongue  = Config::get('enums.mother_tongue');
        $nationality    = Config::get('enums.nationality');
        $height         = Config::get('enums.height');

        return view('profile.personalinformaion',compact('height','heading','gender','marital_status','religion','body_type','skin_tone','cast','mother_tongue','nationality'));
    }

    Public function store(Request $request)
    {
        $personalInfo = new PersonalInformation;

        $personalInfo->gender_id         = (!empty($request->gender_id)) ? $request->gender_id : '';
        $personalInfo->dob               = (!empty($request->dob)) ? $request->dob : '';
        $personalInfo->marital_status_id = (!empty($request->marital_status_id)) ? $request->marital_status_id : '';
        $personalInfo->religion_id       = (!empty($request->religion_id)) ? $request->religion_id : '';
        $personalInfo->height            = (!empty($request->height)) ? $request->height : '';
        $personalInfo->body_type_id      = (!empty($request->body_type_id)) ? $request->body_type_id : '';
        $personalInfo->skin_tone_id      = (!empty($request->skin_tone_id)) ? $request->skin_tone_id : '';
        $personalInfo->cast_id           = (!empty($request->cast_id)) ? $request->cast_id : '';
        $personalInfo->place_of_birth_id = (!empty($request->place_of_birth_id)) ? $request->place_of_birth_id : '';
        $personalInfo->mother_tongue     = (!empty($request->mother_tongue)) ? $request->mother_tongue : '';
        $personalInfo->biography         = (!empty($request->biography)) ? $request->biography : '';
        $personalInfo->nationality_id    = (!empty($request->nationality_id)) ? $request->nationality_id : '';
        $personalInfo->user_id           = (!empty($request->user_id)) ? $request->user_id : '';

        $personalInfo->save();
        $message = 'Record Added Successfully';
        $heading = 'Profile Information';
        return redirect('/personalinformation')->with($message, $heading);
    }

}
