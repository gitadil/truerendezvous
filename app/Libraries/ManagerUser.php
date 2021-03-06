<?php

namespace App\Libraries;

use Illuminate\Support\Facades\Auth;
use DB;

class ManagerUser extends ManagerBase
{


    public function SearchUser($lookingfor = null, $from = null, $to = null, $country = null, $city = null)
    {

        DB::connection()->enableQueryLog();
        $users = DB::table('users')
            ->leftJoin('personal_information', 'users.guid', '=', 'personal_information.user_id')
            ->leftJoin('contact_information', 'users.guid', '=', 'contact_information.user_id')
            ->where('confirmed', '=', 1)
            ->when($lookingfor, function ($query) use ($lookingfor) {
                return $query->where('personal_information.gender_id', $lookingfor);
            })
            ->when($from, function ($query) use ($from) {
                return $query->where(DB::raw('(select getage(personal_information.dob))'), '<=', $from);
            })
            ->when($to, function ($query) use ($to) {
                return $query->where(DB::raw('(select getage(personal_information.dob))'), '>=', $to);
            })
            ->when($country, function ($query) use ($country) {
                return $query->where('contact_information.country_id', $country);
            })
            ->when($city, function ($query) use ($city) {
                return $query->where('contact_information.city', 'LIKE', '%' . $city . '%');
            })
            ->orderByDesc('is_active')->orderByDesc('last_login')
            ->paginate(2);

        /*$queries = DB::getQueryLog();

        echo "<pre>";
            print_r($queries);
        echo "<pre>";
        exit();*/

        return $users;
    }

    public static function getAllActiveUSers()
    {
        $users = DB::table('users')
            ->where('is_active', '=', 1)
            ->orderByDesc('id')
            ->paginate(10);

        return $users;
    }

    public static function changeStatus($id)
    {

        $users = DB::table('users')
            ->where('guid', $id)
            ->update(['is_active' => 0]);

        return $users;
    }

    public static function personaldetail($id)
    {

        $users = DB::table('personal_information AS pi')
            ->select(DB::raw('pi.*, documents.path AS profile_image,u.first_name,u.last_name,u.email,u.phone_no'))
            ->leftJoin('documents', 'pi.profile_image_id', '=', 'documents.id')
            ->join('users AS u', 'u.guid', '=', 'pi.user_id')
            ->where('pi.user_id', '=', $id)
            ->get();

        return $users;
    }

}
