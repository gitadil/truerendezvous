<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EducationInformation;
use Faker\Provider\Uuid;
use App\Http\Controllers\DocumentController AS DOCCtrl;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use stdClass;


class EducationInformationController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    Public function index()
    {
        $heading    = 'Education Information';
        $educations = DB::table('education_information')->where('user_id', '=', Auth::user()->guid)->get();

        return view('profile.education.educationinformation',compact('heading','educations'));
    }


    Public function create($id = '')
    {

        $educationInfo = EducationInformation::where('user_id', Auth::user()->guid)
            ->where('id', $id)
            ->first();
        if(empty($educationInfo))
            $educationInfo=new EducationInformation();

        $heading      = 'Education Information';
        $dropdowns    = $this->BindDropDowns();

        return        view('profile.education.add')->with('Model',$educationInfo)
                                                    ->with('dropdowns',$dropdowns)
                                                    ->with('heading',$heading);
    }

    Public function store(Request $request)
    {
        //$document_type      = Config::get('enums.document_type.EducationalDocuments');

        $obj                = new stdClass();
        $obj->title         = (!empty($request->degree_title)) ? $request->degree_title : '';
        $obj->document_type = (!empty($document_type)) ? $document_type : 2;//Enum is not working that's why hard code this here
        $obj->document_guid = Uuid::uuid();
        $obj->user_id       = Auth::user()->guid;

        if ($file = $request->file('path')) {
            $name = microtime().'-'.$file->getClientOriginalName();
            $file->move('images', $name);
            $obj->path = $name;
        }

        $document_id   = DOCCtrl::store($obj);
        $educationInfo = new EducationInformation;

        $educationInfo->degree_title          = (!empty($request->degree_title)) ? $request->degree_title : '';
        $educationInfo->passing_year          = (!empty($request->passing_year)) ? $request->passing_year : '';
        $educationInfo->institute             = (!empty($request->institute)) ? $request->institute : '';
        $educationInfo->country_id            = (!empty($request->country_id)) ? $request->country_id : '';
        //$educationInfo->user_id               = Auth::user()->guid;
        $educationInfo->education_document_id = (!empty($document_id)) ? $document_id : '';

        $dropdowns = $this->BindDropDowns();

        if(empty($request->id)) //Add
        {
            $educationInfo->user_id = Auth::user()->guid;
            $educationInfo->save();
            $message = 'Record Added Successfully';
            $heading = 'Education Information';
            return redirect('/education')->with($message, $heading,$dropdowns);
        }
        else //Update
        {
            $affectedRows = EducationInformation::where('user_id', '=', Auth::user()->guid)
                ->where('id', $request->id)
                ->update(array('degree_title' =>$educationInfo->degree_title,
                        'institute' =>$educationInfo->institute,
                        'country_id' =>$educationInfo->country_id,
                        'education_document_id' =>$educationInfo->education_document_id
                    )
                );
            $message = 'Record Updated Successfully';
            $heading = 'Education Information';
            return redirect('/education')->with($message, $heading,$dropdowns);
        }
    }

}
