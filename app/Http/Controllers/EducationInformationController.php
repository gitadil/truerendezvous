<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use App\EducationInformation;
use Faker\Provider\Uuid;
use App\Http\Controllers\DocumentController AS DOCCtrl;
use Illuminate\Support\Facades\Auth;
use stdClass;


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
        $document_type    = Config::get('enums.document_type.EducationalDocuments');

        $obj = new stdClass();
        $obj->title         = (!empty($request->degree_title)) ? $request->degree_title : '';
        $obj->document_type = (!empty($document_type)) ? $document_type : 2;//Enum is not working that's why hard code this here
        $obj->document_guid = Uuid::uuid();
        $obj->user_id       = Auth::user()->guid;

        if ($file = $request->file('path')) {
            $name = $file->getClientOriginalName();
            $file->move('images', $name);
            $obj->path = $name;
        }

        $document_id = DOCCtrl::store($obj);


        $educationInfo = new EducationInformation;

        $educationInfo->degree_title          = (!empty($request->degree_title)) ? $request->degree_title : '';
        $educationInfo->passing_year          = (!empty($request->passing_year)) ? $request->passing_year : '';
        $educationInfo->institute             = (!empty($request->institute)) ? $request->institute : '';
        $educationInfo->country_id            = (!empty($request->country_id)) ? $request->country_id : '';
        $educationInfo->user_id               = Auth::user()->guid;
        $educationInfo->education_document_id = (!empty($document_id)) ? $document_id : '';

        $educationInfo->save();
        $message = 'Record Added Successfully';
        $heading = 'Profile Information';
        return redirect('/educationinformation')->with($message, $heading);
    }

}
