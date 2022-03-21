<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\GCurdController;

class DashboardController extends Controller
{

    protected $GCurdController;
    public function __construct()
    {
        $this->GCurdController = new GCurdController();
    }

    // Add Currencies Type
    public function addcategories(){

        $crud = $this->GCurdController->_getGroceryCrudEnterprise();
        $crud->setTable('categories');
        // $crud->columns(['name','symbol','code','rate','is_default','is_active']);
        $crud->setSubject('Categories', 'Categories');
        $crud->setSkin('bootstrap-v4');
        $output = $crud->render();
        return $this->GCurdController->show($output);
    }

    // Add products
    public function products(){
    $crud = $this->GCurdController->_getGroceryCrudEnterprise();
    $crud->setTable('products');
    $crud->columns(['service_id','title','image','status']);
    $crud->setRelation('service_id','categories','name');
    $crud->displayAs('service_id','Service');
    $crud->setSubject('products', 'products');

    $crud->setFieldUpload('image', 'public/assets/images/products', env('APP_URL').'/public/assets/images/products');
    $crud->callbackBeforeDelete(function ($stateParameters) {
    $check = DB::table('products')->where('prod_id',$stateParameters->primaryKeyValue)->get();
    unlink(public_path().'/assets/images/products' .  $check[0]->image);
    return $stateParameters;
    });
    $crud->callbackColumn('image', function ($value, $row) {
    $val = env('APP_URL').'/public/assets/images/products/'.$value;
    $img = "<div class='thumbnail span1'><center><img src='$val' style='border: 1px solid #ddd; border-radius: 4px; width: 100px;' /></center></div>";
    return($img);
    });

    $crud->setSkin('bootstrap-v4');
    $output = $crud->render();
    return $this->GCurdController->show($output);
    }

    // Add child_products
    public function childproducts(){
    $crud = $this->GCurdController->_getGroceryCrudEnterprise();
    $crud->setTable('child_products');
    $crud->columns(['prod_id','cp_name','cp_price','cp_desc','cp_image','status']);
    $crud->setRelation('prod_id','products','title');
    $crud->displayAs('prod_id','Parent Product');
    $crud->displayAs('cp_name','Child Product');
    $crud->displayAs('cp_price','Price');
    $crud->displayAs('cp_desc','Desc');
    $crud->displayAs('cp_image','Img');
    $crud->setTexteditor(['cp_desc']);
    $crud->setSubject('child_products', 'child products');

    $crud->setFieldUpload('cp_image', 'public/assets/images/products', env('APP_URL').'/public/assets/images/products');
    $crud->callbackBeforeDelete(function ($stateParameters) {
    $check = DB::table('child_products')->where('cp_id',$stateParameters->primaryKeyValue)->get();
    unlink(public_path().'/assets/images/products' .  $check[0]->cp_image);
    return $stateParameters;
    });
    $crud->callbackColumn('cp_image', function ($value, $row) {
    $val = env('APP_URL').'/public/assets/images/products/'.$value;
    $img = "<div class='thumbnail span1'><center><img src='$val' style='border: 1px solid #ddd; border-radius: 4px; width: 100px;' /></center></div>";
    return($img);
    });

    $crud->setSkin('bootstrap-v4');
    $output = $crud->render();
    return $this->GCurdController->show($output);
    }


    // Add add-coupen
    public function coupon_code(){
    $crud = $this->GCurdController->_getGroceryCrudEnterprise();
    $crud->setTable('coupon_code');
    // $crud->columns(['prod_id','cp_name','cp_price','cp_desc','cp_image','status']);
    $crud->setSubject('coupon_code', 'Add Coupon');
    $crud->setSkin('bootstrap-v4');
    $output = $crud->render();
    return $this->GCurdController->show($output);
    }


    // Add add_service_address
    public function add_service_address(){
    $crud = $this->GCurdController->_getGroceryCrudEnterprise();
    $crud->setTable('service_address');
    // $crud->columns(['prod_id','cp_name','cp_price','cp_desc','cp_image','status']);
    $crud->setSubject('service address', 'Add Service Address');
    $crud->setSkin('bootstrap-v4');
    $output = $crud->render();
    return $this->GCurdController->show($output);
    }


    // Add forms_contact
    public function forms_contact(){
    $crud = $this->GCurdController->_getGroceryCrudEnterprise();
    $crud->setTable('forms_contact');
    $crud->columns(['name','email','message','create_at']);
    $crud->setSubject('Contact Us', 'Contact Us');
    $crud->setSkin('bootstrap-v4');
    $output = $crud->render();
    return $this->GCurdController->show($output);
    }

    // Add subscribers
    public function subscribers(){
    $crud = $this->GCurdController->_getGroceryCrudEnterprise();
    $crud->setTable('subscribers');
    $crud->columns(['sub_email','sub_status']);
    $crud->setSubject('Subscribers', 'Subscribers');
    $crud->setSkin('bootstrap-v4');
    $output = $crud->render();
    return $this->GCurdController->show($output);
    }
}