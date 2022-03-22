<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use DB;


class AdminAccount extends Controller
{

    public function index()
    {
        if (session()->has('logAdmin')) {
            return redirect('/dashboard');
        }
        return view('auth.login');
    }

    // User login Function
    public function customLogin(Request $request)
    {

        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $credentials = User::where('email', '=', $request->email)->where('role', '=', 'admin')->first();

        if(!$credentials){
            return back()->with('fail','We do not Recognize Your Email');
        }else{
            // Check Password
            if(Hash::check($request->password, $credentials->password)){
                $request->session()->put('logAdmin', $credentials);
                return redirect('/dashboard');
            }else{
                return back()->with('fail', 'Your Password is Incorrect');
            }

        }
    }


    // User Dashboard Function
    public function dashboard()
    {

        if (session('logAdmin')->role == 'customer') {
        $customer_order = DB::table('orders')
        ->select('orders.*','users.name')
        ->where('orders.user_id', session('logAdmin')->user_id)
        ->join('users', 'users.user_id', '=', 'orders.user_id')
        ->paginate(10);

        $complete_order = DB::table('orders')
        ->where('orders.user_id', session('logAdmin')->user_id)
        ->where('orders.status', 1)
        ->get();

        $complete_order_no = $complete_order->count();

        $pending_order = DB::table('orders')
        ->where('orders.user_id', session('logAdmin')->user_id)
        ->where('orders.status', 0)
        ->get();

        $pending_order_no = $pending_order->count();


                return view('admin.home', 
                compact(
                'customer_order',
                'complete_order_no',
                'pending_order_no'
            ));
        }


        // dd($customer_order);

        return view('admin.home');
    }


    // User SignOut Function
    public function signOut() {
        Session::flush();
        Auth::logout();

        return Redirect('admin');
    }
}
