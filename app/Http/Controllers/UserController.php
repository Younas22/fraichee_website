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
            $check = DB::table('users')->where('id',$stateParameters->primaryKeyValue)->get();
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
