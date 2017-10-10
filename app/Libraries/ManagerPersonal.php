<?php

namespace App\Libraries;
use DB;

class ManagerPersonal extends ManagerBase
{

     public static function GetRecordByUserId($userId)
     {
         $record =DB::table('personal_information AS pi')
             ->select(DB::raw('pi.*, dp.path AS profile_image,dnf.path AS nic_front,dnb.path AS nic_back,
             dnf.path AS dl_front,dnb.path AS dl_back'))
             ->leftJoin('documents AS dp', 'pi.profile_image_id', '=', 'dp.id')
             ->leftJoin('documents AS dnf', 'pi.nic_front_id', '=', 'dnf.id')
             ->leftJoin('documents AS dnb', 'pi.nic_back_id', '=', 'dnb.id')
             ->leftJoin('documents AS ddlf', 'pi.dl_front_id', '=', 'ddlf.id')
             ->leftJoin('documents AS ddlb', 'pi.dl_back_id', '=', 'ddlb.id')
             ->where('pi.user_id','=',$userId)
             ->first();
         
         return $record;
     }
}
