<?php

namespace App\Http\Controllers;

use App\PersonalInformation;
use Illuminate\Support\Facades\Auth;



class SearchController extends Controller
{
    public function __construct()
    {
       //  $this->middleware('auth');
    }

    Public function index()
    {
        return  view('search');
    }


}
