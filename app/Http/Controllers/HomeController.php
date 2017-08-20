<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use League\Flysystem\Config;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        //$gender  = config::get('enum.gender_id');
        $gender1 = config('enum.gender_id.0');

        echo $gender1;exit();

//        print_r($gender);
        print_r($gender1);exit();

        return view('home');
    }
}
