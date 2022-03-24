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


        // Add Blog categories Type
    public function blog_categories(){

        $crud = $this->GCurdController->_getGroceryCrudEnterprise();
        $crud->setTable('blog_categories');
        $crud->setSubject('categories', 'Blog Categories');
        $crud->columns(['cat_name','cat_slug','cat_status']);
        $crud->displayAs('cat_name', 'Name');
        $crud->displayAs('cat_slug', 'Slug');
        $crud->displayAs('cat_status', 'Status');
        $crud->setSkin('bootstrap-v4');
        $output = $crud->render();
        return $this->GCurdController->show($output);
    }

    // Add Blog Type
    public function blog_post(){
        $crud = $this->GCurdController->_getGroceryCrudEnterprise();
        $crud->setTable('blog');
        $crud->columns(['post_title','cat_id','post_img','post_created_at','post_status']);
        $crud->setRelation('cat_id','blog_categories','cat_name');
        $crud->setTexteditor(['post_desc']);
        $crud->displayAs('post_title','Title');
        $crud->displayAs('cat_id','Category');
        $crud->displayAs('post_img','Image');
        $crud->displayAs('post_created_at','Date');
        $crud->displayAs('post_status','Status');
        $crud->displayAs('cat_id','select as blog name');



    $crud->setFieldUpload('post_img', 'public/assets/images/blog', env('APP_URL').'/public/assets/images/blog');
    $crud->callbackBeforeDelete(function ($stateParameters) {
    $check = DB::table('blog')->where('cp_id',$stateParameters->primaryKeyValue)->get();
    unlink(public_path().'/assets/images/blog' .  $check[0]->post_img);
    return $stateParameters;
    });
    $crud->callbackColumn('post_img', function ($value, $row) {
    $val = env('APP_URL').'/public/assets/images/blog/'.$value;
    $img = "<div class='thumbnail span1'><center><img src='$val' style='border: 1px solid #ddd; border-radius: 4px; width: 100px;' /></center></div>";
    return($img);
    });

        $crud->setSkin('bootstrap-v4');
        $output = $crud->render();
        return $this->GCurdController->show($output);
    }




        // all orders-list Show
    public Function orders_list(Request $request)
    {

        $customer_order = DB::table('orders')
        ->select('orders.*','users.name','users.email','users.contact')
        // ->where('orders.user_id', session('logAdmin')->user_id)
        ->join('users', 'users.user_id', '=', 'orders.user_id')
        ->paginate(10);

        // dd($order_details);
        return view('Admin.customer_order', 
                compact(
                'customer_order'
            ));
    }


        // all admin order details Show
    public Function admin_order_details(Request $request)
    {
        $order_details = DB::table('cart_order')
        ->select('cart_order.*','child_products.cp_name as name','child_products.cp_image')
        ->where('cart_order.order_id', $request->order_no)
        ->join('child_products', 'child_products.cp_id', '=', 'cart_order.item_id')
        ->get();

        // dd($order_details);
        return view('Admin.order_details', 
                compact(
                'order_details'
            ));
    }
}