<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Libraries\ManagerUser;
use Illuminate\Support\Facades\View;
//use Illuminate\Contracts\Session;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    Public function index()
    {
        $users      = ManagerUser::getAllActiveUSers();
        $dropdowns  = self::BindDropDowns();

        return  View::make('admin.user.index')
            ->with('users',$users)
            ->with('dropdowns',$dropdowns);
    }

    Public function changestatus($id)
    {
        $status      = ManagerUser::changeStatus($id);
        if($status)
            Session::flash('message', 'Status Updated Successfully!');
        else
            Session::flash('message', 'Status Not Updated!');


       /* if($status)
            $message = "Status Updated Successfully!";
        else
            $message = "Record Not Updated!";*/

        return redirect('/admin/users');//->with($message);
    }

    Public function detail($id)
    {
        $personalInfo      = ManagerUser::personaldetail($id);
        /*echo "<pre>";print_r($personalInfo);echo "</pre>";
        echo "Line No # ".__LINE__ . " FILE NAME # ". __FILE__."<br/>";
        die();*/

        $dropdowns  = self::BindDropDowns();

        return  View::make('admin.user.detail')
            ->with('personal',$personalInfo)
            ->with('dropdowns',$dropdowns);
    }


}
