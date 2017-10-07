<?php

namespace App\Http\Controllers;



use App\Libraries\ManagerUser;
use App\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;


class ProfileController extends Controller
{
    public function __construct()
    {
       //  $this->middleware('auth');
    }

    Public function index(Request $request)
    {

        return  view('profile');
    }




}
