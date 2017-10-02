<?php

namespace App\Libraries;
use DB;

class ManagerPersonal extends ManagerBase
{

     public static function GetRecordByUserId($userId)
     {
         $record =DB::table('personal_information')
             ->where('user_id','=',$userId)
             ->first();

         return $record;
     }
}
