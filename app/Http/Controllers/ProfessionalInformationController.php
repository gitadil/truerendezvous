<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use App\ProfessionalInformation;
use Faker\Provider\Uuid;
use App\Http\Controllers\DocumentController AS DOCCtrl;
use Illuminate\Support\Facades\Auth;
use stdClass;


class ProfessionalInformationController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    Public function create()
    {
        $heading        = 'Professional Information';
        $nationality    = Config::get('enums.nationality');

        return view('profile.professionalinformation',compact('heading','nationality'));
    }

    Public function store(Request $request)
    {
        $document_type    = Config::get('enums.document_type.ProfessionalDocuments');

        $obj = new stdClass();
        $obj->title         = (!empty($request->designation)) ? $request->designation : '';
        $obj->document_type = (!empty($document_type)) ? $document_type : 3;//Enum is not working that's why hard code this here
        $obj->document_guid = Uuid::uuid();
        $obj->user_id       = Auth::user()->guid;

        if ($file = $request->file('path')) {
            $name = $file->getClientOriginalName();
            $file->move('images', $name);
            $obj->path = $name;
        }

        $document_id = DOCCtrl::store($obj);


        $professionalInfo = new ProfessionalInformation;

        $professionalInfo->designation              = (!empty($request->designation)) ? $request->designation : '';
        $professionalInfo->organizaiton_name        = (!empty($request->organizaiton_name)) ? $request->organizaiton_name : '';
        $professionalInfo->country_id               = (!empty($request->country_id)) ? $request->country_id : '';
        $professionalInfo->user_id                  = Auth::user()->guid;
        $professionalInfo->professional_document_id = (!empty($document_id)) ? $document_id : '';

        $professionalInfo->save();
        $message = 'Record Added Successfully';
        $heading = 'Professional Information';
        return redirect('/professionalinformation')->with($message, $heading);
    }

}
