<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use GroceryCrud\Core\GroceryCrud;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserController extends Controller
{
    // all Client Show
    public Function clientUser(Request $request)
    {
        $database = $this->_getDatabaseConnection();
        $config = config('grocerycrud');

        $crud = new GroceryCrud($config, $database);


        $crud->setTable('users');
        $crud->setSubject('User', 'Users');
        $crud->columns(['email']);
        $crud->uniqueFields(['email']);
        $crud->callbackBeforeInsert(function ($stateParameters) {
            $stateParameters->data['created_at'] = Carbon::now();
            $stateParameters->data['updated_at'] = Carbon::now();
            $password = Hash::make($stateParameters->data['password']);
            $stateParameters->data['password'] = $password;
            return $stateParameters;
        });

        $crud->callbackBeforeUpdate(function ($stateParameters) {
            $check = DB::table('users')->where('user_id',$stateParameters->primaryKeyValue)->get();
            if($check[0]->password != $stateParameters->data['password']){
                $password = Hash::make($stateParameters->data['password']);
                $stateParameters->data['password'] = $password;
            }
            return $stateParameters;
        });
        $crud->setRead();
        $crud->setSkin('Flexigrid');
        $crud->unsetFields(['complete_registration','email_verification_code','user_type','email_verified_at','remember_token','created_at','updated_at']);
        $output = $crud->render();
        if ($output->isJSONResponse) {
            return response($output->output, 200)
                ->header('Content-Type', 'application/json')
                ->header('charset', 'utf-8');
        }

        $css_files = $output->css_files;
        $js_files = $output->js_files;
        $output = $output->output;

        return view('backend.grocery.grocery_example', [
            'output' => $output,
            'css_files' => $css_files,
            'js_files' => $js_files
        ]);
    }

        // all customer_profile Show
    public Function customer_profile(Request $request)
    {
        $database = $this->_getDatabaseConnection();
        $config = config('grocerycrud');

        $crud = new GroceryCrud($config, $database);


        $crud->setTable('users');
        $crud->setSubject('Profile', 'Profile');
        $crud->columns(['name','email','contact','image','address']);
        $crud->fields(['name','password','contact','image','address']);
        $crud->unsetAdd();

        $crud->where(['users.user_id' => session('logAdmin')->user_id]);

    $crud->setFieldUpload('image', 'public/assets/images/customer', env('APP_URL').'/public/assets/images/customer');
    $crud->callbackBeforeDelete(function ($stateParameters) {
    $check = DB::table('child_products')->where('cp_id',$stateParameters->primaryKeyValue)->get();
    unlink(public_path().'/assets/images/customer' .  $check[0]->image);
    return $stateParameters;
    });
    $crud->callbackColumn('image', function ($value, $row) {
    $val = env('APP_URL').'/public/assets/images/customer/'.$value;
    $img = "<div class='thumbnail span1'><center><img src='$val' style='border: 1px solid #ddd; border-radius: 4px; width: 100px;' /></center></div>";
    return($img);
    });

        $crud->uniqueFields(['email']);
        $crud->callbackBeforeInsert(function ($stateParameters) {
            $stateParameters->data['created_at'] = Carbon::now();
            $stateParameters->data['updated_at'] = Carbon::now();
            $password = Hash::make($stateParameters->data['password']);
            $stateParameters->data['password'] = $password;
            return $stateParameters;
        });

        $crud->callbackBeforeUpdate(function ($stateParameters) {
            $check = DB::table('users')->where('user_id',$stateParameters->primaryKeyValue)->get();
            if($check[0]->password != $stateParameters->data['password']){
                $password = Hash::make($stateParameters->data['password']);
                $stateParameters->data['password'] = $password;
            }
            return $stateParameters;
        });
        $crud->setRead();
        $crud->setSkin('Flexigrid');
        $crud->unsetFields(['coupon_code','coupon_val','coupon_status','hide_class']);
        $output = $crud->render();
        if ($output->isJSONResponse) {
            return response($output->output, 200)
                ->header('Content-Type', 'application/json')
                ->header('charset', 'utf-8');
        }

        $css_files = $output->css_files;
        $js_files = $output->js_files;
        $output = $output->output;

        return view('backend.grocery.grocery_example', [
            'output' => $output,
            'css_files' => $css_files,
            'js_files' => $js_files
        ]);
    }


        // all customer_order Show
    public Function customer_order(Request $request)
    {
        $database = $this->_getDatabaseConnection();
        $config = config('grocerycrud');
        $crud = new GroceryCrud($config, $database);
        $crud->setTable('orders');
        $crud->setSubject('orders', 'orders');
        $crud->columns(['invoice_id','user_id','note_box','other_address','pickup_date','delivery_date','amount','order_date']);
        $crud->unsetAdd();
                $crud->unsetEdit();
        $crud->setRelation('user_id','users','name');
        $crud->displayAs('user_id','Name');
        $crud->where(['orders.user_id' => session('logAdmin')->user_id]);
        $crud->unsetReadFields(['card_type', 'card_holder_name', 'first_day','second_day','therd_day','fourth_day']);
        $crud->setRead();
        $crud->setSkin('Flexigrid');
        $output = $crud->render();
        if ($output->isJSONResponse) {
            return response($output->output, 200)
                ->header('Content-Type', 'application/json')
                ->header('charset', 'utf-8');
        }

        $css_files = $output->css_files;
        $js_files = $output->js_files;
        $output = $output->output;
        return view('backend.grocery.grocery_example', [
            'output' => $output,
            'css_files' => $css_files,
            'js_files' => $js_files
        ]);
    }

    private function _getDatabaseConnection() {
        return [
            'adapter' => [
                'driver' => 'Pdo_Mysql',
                'database' => env('DB_DATABASE'),
                'username' => env('DB_USERNAME'),
                'password' => env('DB_PASSWORD'),
                'charset' => 'utf8'
            ]
        ];
    }
}
