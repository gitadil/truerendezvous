<?php

namespace  App\Helpers;
use Illuminate\Support\Facades\Route;


class Helper{
    public static function check_route($link){
       return Route::getFacadeRoot()->current()->uri()==$link ? true : false;
    }
}
