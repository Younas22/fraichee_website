<?php
   
namespace App\Http\Controllers\API;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
// use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Validator;
use Illuminate\Support\Facades\DB;
   
class RegisterController extends BaseController
{
	    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'address' => 'required',
            'password' => 'required'
        ]);
   
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
   
        $input = $request->all();
        DB::table('users')->insert($input);
   
        return $this->sendResponse($input, 'User register successfully.');
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
            $success['user_id'] =  $check_user->user_id;
            $success['name'] =  $check_user->name;
            $success['email'] =  $check_user->email;
            $success['address'] =  $check_user->address;
            return $this->sendResponse($success, 'User login successfully.');
        }else{
            $success['data'] =  null;
            return $this->sendResponse($success, 'email or password Wrong!');
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
            return $this->sendResponse($success, 'User profile data getting successfully.');
        }else{
            return $this->sendResponse($success, 'something wrong!');
        }
    }
}