<?php
 
use Illuminate\Support\Facades\Route;
// Admin Controllers
use App\Http\Controllers\AdminHome;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Home;

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
Route::match(['get','post'],'/dashboard/add-service-address', [DashboardController::class,'add_service_address'])->name('add_service_address');
Route::match(['get','post'],'/dashboard/coupon-code', [DashboardController::class,'coupon_code'])->name('coupon_code');
Route::match(['get','post'],'/dashboard/contact-us-details', [DashboardController::class,'forms_contact'])->name('contact-us-details');
Route::match(['get','post'],'/dashboard/subscribers', [DashboardController::class,'subscribers'])->name('subscribers');

    // Route::match(['get','post'],'/dashboard/categories', [DashboardController::class,'addblog_categories'])->name('categories');
    Route::match(['get','post'],'/dashboard/blog', [DashboardController::class,'addblog'])->name('blog');
    Route::match(['get','post'],'/dashboard/add-destination', [DashboardController::class,'adddestination'])->name('adddestination');

});








//Home
Route::get('/', [Home::class, 'index'])->name('index');
Route::get('/shop', [Home::class, 'shop'])->name('shop');
Route::get('/cart', [Home::class, 'cart'])->name('cart');
Route::get('/checkout', [Home::class, 'checkout'])->name('checkout');