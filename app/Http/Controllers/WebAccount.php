<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use DB;


class WebAccount extends Controller
{



    public function login()
    {
        if (session()->has('logAdmin') && session('logAdmin')->role == 'customer') {
            return redirect('/shop');
        }
        return view('home.webaccount.login');
    }

        public function usercustomLogin(Request $request)
    {



        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $credentials = User::where('email', '=', $request->email)->where('role', '=', 'customer')->first();

        // dd($credentials);
        if(!$credentials){
            return back()->with('fail','We do not Recognize Your Email');
        }else{
            // Check Password
            if(Hash::check($request->password, $credentials->password)){
                session()->put('logAdmin', $credentials);
                return redirect('/shop');
            }else{
                return back()->with('fail', 'Your Password is Incorrect');
            }

        }

    }

        public function signup()
    {
        return view('home.webaccount.signup');
    }

        public function location(Request $request)
    {
        if(!empty($request->keyword)) {
            $keyword = preg_replace("/\s+/", "", $request->keyword);
        $curl = curl_init();
        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://api.ideal-postcodes.co.uk/v1/postcodes/'.$keyword.'?api_key=ak_kslpaxvlq0GX5VjGGmTIdEMOiRv9f',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'GET',
        ));

        $response = curl_exec($curl);
        curl_close($curl);
        $address_data = json_decode($response);
        if ($address_data->message == 'Success') {
        foreach($address_data->result as $key) {
                echo "<option class='form-control' value='".$key->line_1.', '.$key->line_2.', '.$key->district.', '.$key->postcode."'>".$key->line_1.', '.$key->line_2.', '.$key->district.', '.$key->postcode."</option>";
                // echo "<hr>";
        }
        }else{
            echo "<option class='form-control'>Address Not Found!</option>";
        }


     }
    }

        public function customRegistration(Request $request)
    {  
        $request->validate([
            'phone' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
           
        $data = $request->all();
        $check = $this->create($data);
         
        return redirect("login")->withSuccess('You have signed-in');
    }

    public function create(array $data)
    {

        if ($data['address'] == 'Select Address') {
            $address = null;
        }else{
            $address = $data['address'];
        }

      $user_data = [
        
        'address' => $address,
        'name' => $data['fname'].' '.$data['lname'],
        'contact' => $data['phone'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ];
      $users = DB::table('users')->insertGetId($user_data);
      return true;
    } 


        public function forget_password()
    {
        return view('home.webaccount.forget_password');
    }


    // User SignOut Function
    public function signOutuser() {
        Session::flush();
        Auth::logout();
  
        return Redirect('login');
    }
}
