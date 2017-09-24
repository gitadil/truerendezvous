<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PersonalInformation;
use Illuminate\Support\Facades\Auth;

class PersonalInformationController extends Controller
{
    public function __construct()
    {
         $this->middleware('auth');
    }

    Public function create()
    {
        $personalInfo = PersonalInformation::where('user_id', Auth::user()->guid)->first();
        if(empty($personalInfo))
            $personalInfo=new PersonalInformation();

        $dropdowns    = self::BindDropDowns();
        return        view('profile.personal.personalinformation')->with('Model',$personalInfo)->with('dropdowns',$dropdowns);
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

        $dropdowns = $this->BindDropDowns();

        if(empty($request->id)) //Add
        {
            $personalInfo->user_id = Auth::user()->guid;
            $personalInfo->save();
            $message = 'Record Added Successfully';
            $heading = 'Profile Information';
            return redirect('/personal')->with($message, $heading,$dropdowns);
        }
        else //Update
        {
            $affectedRows = PersonalInformation::where('user_id', '=', Auth::user()->guid)
                ->update(array('gender_id' =>$personalInfo->gender_id,
                               'dob' =>$personalInfo->dob,
                               'marital_status_id' =>$personalInfo->marital_status_id,
                               'religion_id' =>$personalInfo->religion_id,
                               'height' =>$personalInfo->height,
                               'body_type_id' =>$personalInfo->body_type_id,
                               'skin_tone_id' =>$personalInfo->skin_tone_id,
                               'cast_id' =>$personalInfo->cast_id,
                               'place_of_birth_id' =>$personalInfo->place_of_birth_id,
                               'mother_tongue' =>$personalInfo->mother_tongue,
                               'biography' =>$personalInfo->biography,
                               'nationality_id' =>$personalInfo->nationality_id
                    )
                );
            $message = 'Record Updated Successfully';
            $heading = 'Profile Information';
            return redirect('/personal')->with($message, $heading,$dropdowns);
        }

    }
}
