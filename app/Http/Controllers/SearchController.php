<?php

namespace App\Http\Controllers;



use App\Libraries\ManagerUser;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;


class SearchController extends Controller
{
    public function __construct()
    {
       //  $this->middleware('auth');
    }

    Public function index(Request $request)
    {
       $users= new ManagerUser();
        $iam=$request->get("iam");
        $lookingfor=$request->get("lookingfor");
        $from=$request->get("from");
        $to=$request->get("to");
        $city=$request->get("city");
        $country=$request->get("country");
        $dropdowns    = self::BindDropDowns();

        return  view('search')->with('Model',$users->SearchUser($lookingfor,$from,$to,$country,$city))->with('dropdowns',$dropdowns);
    }




}
