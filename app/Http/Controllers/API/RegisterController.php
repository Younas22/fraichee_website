<?php
   
namespace App\Http\Controllers\API;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Validator;
use Illuminate\Support\Facades\DB;
   
class RegisterController extends BaseController
{

    public function aa($value='')
    {
        echo "<pre>";
        print_r($value);
        exit;
    }

	    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'contact' => 'required|unique:users',
            'address' => 'required',
            'password' => 'required'
        ]);
   
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
        
        $data = array(
            'name'=> $request->name,
            'email'=> $request->email,
            'address'=> $request->address,
            'password'=> $request->password,
            'contact'=> $request->contact,
            'api_token'=>generateAndSaveApiAuthToken()
        );

        // $this->aa($data);
        DB::table('users')->insert($data);
   
        return $this->sendResponse($data, 'User register successfully.');
    }

	    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required'
            ]);
   
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
   
        $email = $request->email;
        $password = $request->password;

        $check_user = DB::table('users')->where(['email'=>$email,'password'=>$password])->first();

        if (!empty($check_user)) {
            DB::table('users')->where(['email'=>$email,'password'=>$password])->update(['api_token'=>generateAndSaveApiAuthToken()]);

            $get_user = DB::table('users')->where(['email'=>$email,'password'=>$password])->first();
            $success['user_id'] =  $get_user->user_id;
            $success['name'] =  $get_user->name;
            $success['email'] =  $get_user->email;
            $success['contact'] =  $get_user->contact;
            $success['address'] =  $get_user->address;
            $success['password'] =  $get_user->password;
            $success['api_token'] =  $get_user->api_token;
            return $this->sendResponse($success, 'User login successfully.');

        }else{
            $success['data'] =  null;
            return $this->sendResponse($success, 'email or password Wrong!');
        }        
    }  

         public function user_logout(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'api_token' => 'required'
            ]);
   
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
   
        $api_token = $request->api_token;

        $check_user = DB::table('users')->where(['api_token'=>$api_token])->first();

        if (!empty($check_user)) {
            DB::table('users')->where(['api_token'=>$api_token])->update(['api_token'=>null]);
            $success['api_token'] =  null;
            return $this->sendResponse($success, 'User logout successfully.');
            
        }else{
            $success['data'] =  null;
            return $this->sendResponse($success, 'api_token Wrong!');
        }        
    }

   	    public function user_data(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'required'
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
   
        $user_data = DB::table('users')->where(['user_id'=>$request->user_id])->first();
        if (!empty($user_data)) {
            $success['user_id'] =  $user_data->user_id;
            $success['name'] =  $user_data->name;
            $success['email'] =  $user_data->email;
            $success['contact'] =  $user_data->contact;
            $success['address'] =  $user_data->address;
            $success['password'] =  $user_data->password;
            return $this->sendResponse($success, 'User profile data getting successfully.');
        }else{
            return $this->sendResponse($success, 'something wrong!');
        }
    }


        public function edit_profile(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'required'
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }


        $edit_profile = [
            'name' => $request->name,
            'contact' => $request->contact,
            'address' => $request->address,
            'password' => $request->password
        ];

        DB::table('users')->where('user_id', $request->user_id)->update($edit_profile);
        $user_data = DB::table('users')->where(['user_id'=>$request->user_id])->first();
        $success['user_id'] =  $user_data->user_id;
        $success['name'] =  $user_data->name;
        $success['email'] =  $user_data->email;
        $success['contact'] =  $user_data->contact;
        $success['address'] =  $user_data->address;
        $success['password'] =  $user_data->password;
        return $this->sendResponse($success, 'profile updated!');
    }
}