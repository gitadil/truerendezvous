<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use App\EducationInformation;


class EducationInformationController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    Public function create()
    {
        $heading        = 'Education Information';
        $nationality    = Config::get('enums.nationality');

        return view('profile.educationinformation',compact('heading','nationality'));
    }

    Public function store(Request $request)
    {
        $educationInfo = new EducationInformation;


        $educationInfo->nationality_id    = (!empty($request->nationality_id)) ? $request->nationality_id : '';
        $educationInfo->user_id           = (!empty($request->user_id)) ? $request->user_id : '';

        $educationInfo->save();
        $message = 'Record Added Successfully';
        $heading = 'Profile Information';
        return redirect('/educationinformation')->with($message, $heading);
    }

}
