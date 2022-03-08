<?php
 
use Illuminate\Support\Facades\Route;
// Admin Controllers
use App\Http\Controllers\AdminHome;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::match(['get','post'],'/grocery_example', [GroceryController::class, 'grocery_crud']);
// Admin Panel Routes
Route::get('admin', [AdminHome::class, 'index'])->name('login');
Route::post('custom-login', [AdminHome::class, 'customLogin'])->name('login.custom');
Route::get('signout', [AdminHome::class, 'signOut'])->name('signout');



Route::group(['prefix' => '',"middleware" => "AuthCheck"],function(){
    // Dashboard
    Route::get('/dashboard', [AdminHome::class, 'dashboard'])->name('dashboard');
    // user Route
    Route::match(['get','post'],'/dashboard/client-user', [UserController::class,'clientUser']);

//categories
Route::match(['get','post'],'/dashboard/categories', [DashboardController::class,'addcategories'])->name('categories');

//products
Route::match(['get','post'],'/dashboard/products', [DashboardController::class,'products'])->name('products');
Route::match(['get','post'],'/dashboard/child-products', [DashboardController::class,'childproducts'])->name('childproducts');

    // Route::match(['get','post'],'/dashboard/categories', [DashboardController::class,'addblog_categories'])->name('categories');
    Route::match(['get','post'],'/dashboard/blog', [DashboardController::class,'addblog'])->name('blog');
    Route::match(['get','post'],'/dashboard/add-destination', [DashboardController::class,'adddestination'])->name('adddestination');

});

