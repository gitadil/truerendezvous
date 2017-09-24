<?php

namespace App\Libraries;
use DB;

class ManagerUser extends ManagerBase
{

     public function GetAllUser()
     {
         $users =DB::table('users')
             ->leftJoin('personal_information', 'users.guid', '=', 'personal_information.user_id')
             ->where('confirmed','=',1)->orderByDesc('is_active')->orderByDesc('last_login')
             ->get();

         return $users;
     }

    public function SearchUser($lookingfor,$from,$to)
    {
        $users =DB::table('users')
            ->leftJoin('personal_information', 'users.guid', '=', 'personal_information.user_id')
            ->where('confirmed','=',1)
            ->when($lookingfor, function ($query) use ($lookingfor) {
                return $query->orwhere('personal_information.gender_id', $lookingfor);
            })
            ->when($from, function ($query) use ($from) {
                return $query->orwhere('personal_information.gender_id', $from);
            })
            ->orderByDesc('is_active')->orderByDesc('last_login')
            ->get();

        return $users;
    }

}
