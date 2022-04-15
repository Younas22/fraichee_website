<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use GroceryCrud\Core\GroceryCrud;

class GCurdController extends Controller
{
    /**
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function _getDatabaseConnection() {
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

    public function _getGroceryCrudEnterprise() {
        $database = $this->_getDatabaseConnection();
        $config = config('grocerycrud');
        $crud = new GroceryCrud($config, $database);
        return $crud;
    }

    public function show($output) {
        if ($output->isJSONResponse) {
            return response($output->output, 200)
                ->header('Content-Type', 'application/json')
                ->header('charset', 'utf-8');
        }

        $css_files = $output->css_files;
        $js_files = $output->js_files;
        $output = $output->output;

        // backend.customer.customers.index
        return view('backend.grocery.grocery_example', [
            'output' => $output,
            'css_files' => $css_files,
            'js_files' => $js_files
        ]);
    }

}
