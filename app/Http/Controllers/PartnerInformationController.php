<?php

namespace App\Http\Controllers;

use App\partnerInformation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use stdClass;
use Faker\Provider\Uuid;
use Illuminate\Support\Facades\Auth;

class PartnerInformationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    Public function create(Request $request)
    {
        $partnerInfo = partnerInformation::where('user_id', Auth::user()->guid)->first();
        if(empty($partnerInfo))
        {
            $partnerInfo=new PartnerInformation();
        }
        $dropdowns    = $this->BindDropDowns();
        return        view('profile.partnerinformation')->with('Model',$partnerInfo)->with('dropdowns',$dropdowns);
    }

    Public function store(Request $request)
    {
        $partner = new PartnerInformation();
        $partner->min_height_id         = (!empty($request->min_height)) ? $request->min_height: '';
        $partner->max_height_id               = (!empty($request->max_height)) ? $request->max_height : '';
        $partner->country_id       = (!empty($request->country_id)) ? $request->country_id: '';
        $partner->mother_tongue_id =                      (!empty($request->mother_tongue_id)) ? $request->mother_tongue_id: '';
        $partner->religion_id            = (!empty($request->religion_id)) ? $request->religion_id: '';
        $partner->user_id           = (!empty($request->user_id)) ? $request->user_id : '';
        $dropdowns = $this->BindDropDowns();
        if(empty($request->id)) //Add
        {
            $partner->user_id = Auth::user()->guid;
            $partner->save();
            $message = 'Record Added Successfully';
            $heading = 'partner Information';
            return redirect('/partnerinformation')->with($message, $heading);
        }
        else //Update
        {
            $affectedRows = PartnerInformation::where('user_id', '=', Auth::user()->guid)
                ->update(array('min_height_id' =>$partner->min_height_id,
                        'max_height_id' =>$partner->max_height_id,
                        'mother_tongue_id' =>$partner->mother_tongue_id,
                        'country_id' =>$partner->country_id,
                        'religion_id' =>$partner->religion_id
                    )
                );
            $message = 'Record Updated Successfully';
            $heading = 'Participant Information';
            return redirect('/partnerinformation')->with($message, $heading,$dropdowns);
        }
    }

    private  function BindDropDowns()
    {
        $dropdowns=new  stdclass();
        //DropDowns
        $dropdowns->countries    = Config::get('enums.nationality');
        $dropdowns->religion       = Config::get('enums.religion');
        $dropdowns->body_type      = Config::get('enums.body_type');
        $dropdowns->skin_tone      = Config::get('enums.skin_tone');
        $dropdowns->cast           = Config::get('enums.cast');
        $dropdowns->mother_tongue  = Config::get('enums.mother_tongue');
        $dropdowns->height         = Config::get('enums.height');
        return $dropdowns;
    }

}
