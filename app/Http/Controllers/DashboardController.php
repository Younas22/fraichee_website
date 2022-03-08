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
        $crud->setSkin('bootstrap-v4');
        $output = $crud->render();
        return $this->GCurdController->show($output);
    }

    // Add Blog categories Type
    public function addblog_categories(){

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
    public function addblog(){
        $crud = $this->GCurdController->_getGroceryCrudEnterprise();
        $crud->setTable('blog');
        $crud->columns(['post_title','cat_id','post_img','post_created_at','post_status']);
        $crud->setRelation('cat_id','blog_categories','cat_name');
        $crud->setRelation('destination_id','destination','destination_name');
        $crud->setTexteditor(['post_desc']);
        $crud->displayAs('post_title','Title');
        $crud->displayAs('cat_id','Category');
        $crud->displayAs('post_img','Image');
        $crud->displayAs('post_created_at','Date');
        $crud->displayAs('post_status','Status');
        $crud->displayAs('cat_id','select as blog name');

        $crud->setFieldUpload('post_img', '../imta.pkworld.pk/public/blog', env('Img_APP_URL').'/public/blog');
        $crud->callbackBeforeDelete(function ($stateParameters) {
        $check = DB::table('blog')->where('post_id',$stateParameters->primaryKeyValue)->get();
        unlink('../imta.pkworld.pk/public/blog/' .  $check[0]->post_img);
        return $stateParameters;
        });
        $crud->callbackColumn('post_img', function ($value, $row) {
        $val = env('Img_APP_URL').'/public/blog/'.$value;
        $img = "<div class='thumbnail span1'><img src='$val' /></div>";
        return($img);
        });


        $crud->setSkin('bootstrap-v4');
        $output = $crud->render();
        return $this->GCurdController->show($output);
    }

        // Add destination
    public function adddestination(){
        $crud = $this->GCurdController->_getGroceryCrudEnterprise();
        $crud->setTable('destination');
        // $crud->columns(['post_title','cat_id','post_img','post_created_at','post_status']);
        // $crud->displayAs('post_title','Title');

        $crud->setFieldUpload('destination_img', '../imta.pkworld.pk/public/destination', env('Img_APP_URL').'/public/destination');
        $crud->callbackBeforeDelete(function ($stateParameters) {
        $check = DB::table('destination')->where('id',$stateParameters->primaryKeyValue)->get();
        unlink('../imta.pkworld.pk/public/destination/' .  $check[0]->destination_img);
        return $stateParameters;
        });
        $crud->callbackColumn('destination_img', function ($value, $row) {
        $val = env('Img_APP_URL').'/public/destination/'.$value;
        $img = "<div class='thumbnail span1'><img src='$val' /></div>";
        return($img);
        });


        $crud->setSkin('bootstrap-v4');
        $output = $crud->render();
        return $this->GCurdController->show($output);
    }
}