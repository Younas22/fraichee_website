<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;


class WebAccount extends Controller
{

    public function login()
    {
        return view('home.webaccount.login');
    }

        public function signup()
    {
        return view('home.webaccount.signup');
    }

        public function forget_password()
    {
        return view('home.webaccount.forget_password');
    }

    // User login Function
    public function customLogin(Request $request)
    {

        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $credentials = User::where('email', '=', $request->email)->where('role', '=', 1)->first();

        if(!$credentials){
            return back()->with('fail','We do not Recognize Your Email');
        }else{
            // Check Password
            if(Hash::check($request->password, $credentials->password)){
                $request->session()->put('logUser', $credentials);
                return redirect('/dashboard');
            }else{
                return back()->with('fail', 'Your Password is Incorrect');
            }

        }
    }


    // User Dashboard Function
    public function dashboard()
    {
        return view('admin.home');
    }


    // User SignOut Function
    public function signOut() {
        Session::flush();
        Auth::logout();

        return Redirect('admin');
    }
}
