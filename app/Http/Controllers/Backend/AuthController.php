<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Session;
use Auth;
use Mail;


class AuthController extends Controller
{
    public function login(Request $request)
    {

        return view('admin-portfolio.backend.Auth.login');
    }
    public function forgot(Request $request)
    {
        return view('admin-portfolio.backend.Auth.email-confirmation');
    }
    public function login_admin(Request $request)
    {
       if(Auth::attempt(['email' => $request->email, 'password' => $request->password],true))
       {
        if(!empty(Auth::User()->status))
        {
            if(Auth::User()->is_role == '1')
            {
                return redirect ('admin/dashboard');
            //    return redirect()->indended('admin/dashboard');
            // return redirect('admin-portfolio.backend.dashboard.list');
            }
        }
        else
            {
            $user_id = Auth::User()->id;
            Auth::logout();
            $user = User::find($user_id);
            return redirect('login')->with('success', 'This email is not yet Verified');
            }
        }
        else
        {
            return redirect()->back()->with('error', 'Please enter the correct passwords');
        }
    }
    public function email_confirmation(Request $request)
    {
        $random_password = rand(11111111111 , 999999999);
        $user = User::where('email', '=', $request->email)->first();
        if(!empty($user)){
            $user->password = Hash::make($random_password);
            $user->save();

            $user->password_random = $random_password;

            Mail::to($user->email)->send(new ForgotPasswordMail($user));

            return redirect()->back()->with('succes', 'Password Successfully Send to Your Email box. please check your email box');
        }
        else
        {
              return redirect()->back()->with('error', 'Email Id not Found!');
        }
    }
}

