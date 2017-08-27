<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Mail;
use Faker\Provider\Uuid;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/register';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $confirmation_code = str_random(30);
        $User  = new  User();
        $User->first_name        = $data['first_name'];
        $User->last_name         = $data['last_name'];
        $User->phone_no          = $data['phone_no'];
        $User->email             = $data['email'];
        $User->password          = bcrypt($data['password']);
        $User->confirmation_code = $confirmation_code;
        $User->guid=Uuid::uuid();
        $User->save();

        $email = $data['email'];
        $name = $data['first_name'];


        Mail::send('email.verify', $User->toArray(), function($message) use($email,$name) {
            $message->to($email,$name)
                ->subject('Verify your email address');
        });
        
        return redirect()->back()->with('message', 'Office successfully added.');

    }

    public function confirm($confirmation_code)
    {
        if( ! $confirmation_code)
            return view('auth.confirm')->with('message', 'Invalid Code.');

        $user = User::whereConfirmationCode($confirmation_code)->first();

        if ( ! $user)
            return view('auth.confirm')->with('message', 'Invalid Code.');

        $user->confirmed         = 1;
        $user->confirmation_code = null;
        $user->save();
        return redirect('/login')->with('message', 'Office successfully added.');
    }
}
