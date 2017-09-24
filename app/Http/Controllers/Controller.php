<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use stdClass;
use Illuminate\Support\Facades\Config;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public static function BindDropDowns()
    {
        $dropdowns = new  stdclass();
        
        //DropDowns
        $dropdowns->gender         = Config::get('enums.gender');
        $dropdowns->marital_status = Config::get('enums.marital_status');
        $dropdowns->religion       = Config::get('enums.religion');
        $dropdowns->body_type      = Config::get('enums.body_type');
        $dropdowns->skin_tone      = Config::get('enums.skin_tone');
        $dropdowns->cast           = Config::get('enums.cast');
        $dropdowns->mother_tongue  = Config::get('enums.mother_tongue');
        $dropdowns->countries      = Config::get('enums.countries');
        $dropdowns->height         = Config::get('enums.height');
        $dropdowns->age            = self::fillage();
        
        return $dropdowns;
    }
    private static function  fillage()
    {
        $age=array();
        for($i=14;$i<=75;$i++)
           $age[$i]=$i;
        return $age;
    }
}
