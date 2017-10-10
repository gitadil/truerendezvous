<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PersonalInformation;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\DocumentController AS DOCCtrl;
use stdClass;
use Faker\Provider\Uuid;
use App\Libraries\ManagerPersonal AS PMgr;



class PersonalInformationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    Public function create()
    {
        //$personalInfo = PersonalInformation::where('user_id', Auth::user()->guid)->first();
        $personalInfo = PMgr::GetRecordByUserId(Auth::user()->guid);
        if (empty($personalInfo))
            $personalInfo = new PersonalInformation();

        $dropdowns = self::BindDropDowns();
        return view('profile.personal.personalinformation')->with('Model', $personalInfo)->with('dropdowns', $dropdowns);
    }

    Public function store(Request $request)
    {
        $personalInfo                       = new PersonalInformation;
        $personalInfo->gender_id            = (!empty($request->gender_id)) ? $request->gender_id : '';
        $personalInfo->dob                  = (!empty($request->dob)) ? $request->dob : '';
        $personalInfo->marital_status_id    = (!empty($request->marital_status_id)) ? $request->marital_status_id : '';
        $personalInfo->religion_id          = (!empty($request->religion_id)) ? $request->religion_id : '';
        $personalInfo->height               = (!empty($request->height)) ? $request->height : '';
        $personalInfo->body_type_id         = (!empty($request->body_type_id)) ? $request->body_type_id : '';
        $personalInfo->skin_tone_id         = (!empty($request->skin_tone_id)) ? $request->skin_tone_id : '';
        $personalInfo->cast_id              = (!empty($request->cast_id)) ? $request->cast_id : '';
        $personalInfo->place_of_birth_id    = (!empty($request->place_of_birth_id)) ? $request->place_of_birth_id : '';
        $personalInfo->mother_tongue        = (!empty($request->mother_tongue)) ? $request->mother_tongue : '';
        $personalInfo->biography            = (!empty($request->biography)) ? $request->biography : '';
        $personalInfo->nationality_id       = (!empty($request->nationality_id)) ? $request->nationality_id : '';

        if ($file = $request->file('personal_image')) {
            $profile_image_id               = $this->_store_image("profile_image","1",$file,$rec_id='');
            $personalInfo->profile_image_id = (!empty($profile_image_id)) ? $profile_image_id : '';
        }
        if ($file = $request->file('nic_front')) {
            $nic_front_id               = $this->_store_image("nic_front","1",$file,$rec_id='');
            $personalInfo->nic_front_id = (!empty($nic_front_id)) ? $nic_front_id : '';
        }
        if ($file = $request->file('nic_back')) {
            $nic_back_id               = $this->_store_image("nic_back","1",$file,$rec_id='');
            $personalInfo->nic_back_id = (!empty($nic_back_id)) ? $nic_back_id : '';
        }
        if ($file = $request->file('driving_licence_front')) {
            $dl_front_id               = $this->_store_image("driving_licence_front","1",$file,$rec_id='');
            $personalInfo->dl_front_id = (!empty($dl_front_id)) ? $dl_front_id : '';
        }
        if ($file = $request->file('driving_licence_back')) {
            $dl_back_id               = $this->_store_image("driving_licence_back","1",$file,$rec_id='');
            $personalInfo->dl_back_id = (!empty($dl_back_id)) ? $dl_back_id : '';
        }

        $dropdowns = $this->BindDropDowns();

        if (empty($request->id)) //Add
        {
            $personalInfo->user_id = Auth::user()->guid;
            $personalInfo->save();
            $message = 'Record Added Successfully';
            $heading = 'Profile Information';
            return redirect('/personal')->with($message, $heading, $dropdowns);
        } else //Update
        {
            $affectedRows = PersonalInformation::where('user_id', '=', Auth::user()->guid)
                ->update(array('gender_id'  => $personalInfo->gender_id,
                        'dob'               => $personalInfo->dob,
                        'marital_status_id' => $personalInfo->marital_status_id,
                        'religion_id'       => $personalInfo->religion_id,
                        'height'            => $personalInfo->height,
                        'body_type_id'      => $personalInfo->body_type_id,
                        'skin_tone_id'      => $personalInfo->skin_tone_id,
                        'cast_id'           => $personalInfo->cast_id,
                        'place_of_birth_id' => $personalInfo->place_of_birth_id,
                        'mother_tongue'     => $personalInfo->mother_tongue,
                        'biography'         => $personalInfo->biography,
                        'nationality_id'    => $personalInfo->nationality_id,
                        'profile_image_id'  => $personalInfo->profile_image_id,
                        'nic_front_id'      => $personalInfo->nic_front_id,
                        'nic_back_id'       => $personalInfo->nic_back_id,
                        'dl_front_id'       => $personalInfo->dl_front_id,
                        'dl_back_id'        => $personalInfo->dl_back_id
                    )
                );
            $message = 'Record Updated Successfully';
            $heading = 'Profile Information';
            return redirect('/personal')->with($message, $heading, $dropdowns);
        }

    }

    Private function _store_image($title,$document_type,$image,$rec_id='')
    {
        $file_name = microtime() . '-' . $image->getClientOriginalName();
        $image->move('images', $file_name);

        $obj                = new stdClass();
        $obj->title         = (!empty($title)) ? $title : '';
        $obj->document_type = (!empty($document_type)) ? $document_type : 1;
        $obj->document_guid = Uuid::uuid();
        $obj->user_id       = Auth::user()->guid;
        $obj->path          = $file_name;

        return $image_id = DOCCtrl::store($obj);
    }
}
