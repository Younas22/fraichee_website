<?php
 
use Illuminate\Support\Facades\Route;
// Admin Controllers
use App\Http\Controllers\AdminAccount;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Home;
use App\Http\Controllers\WebAccount;

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
Route::get('admin', [AdminAccount::class, 'index'])->name('admin');
Route::post('custom-login', [AdminAccount::class, 'customLogin'])->name('login.custom');
Route::get('signout', [AdminAccount::class, 'signOut'])->name('signout');



Route::group(['prefix' => '',"middleware" => "AuthCheck"],function(){
    // Dashboard
    Route::get('/dashboard', [AdminAccount::class, 'dashboard'])->name('dashboard');
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






//web accounts details
Route::get('/login', [WebAccount::class, 'login'])->name('login');
Route::post('user-custom-login', [WebAccount::class, 'usercustomLogin'])->name('user-login.custom'); 
Route::get('/signup', [WebAccount::class, 'signup'])->name('signup');
Route::post('custom-registration', [WebAccount::class, 'customRegistration'])->name('register.custom'); 
Route::get('/forget-password', [WebAccount::class, 'forget_password'])->name('forget-password');
Route::post('/location', [WebAccount::class, 'location'])->name('location');
Route::get('usersignout', [WebAccount::class, 'signOutuser'])->name('usersignout');




//Home
Route::get('/', [Home::class, 'index'])->name('index');
Route::get('/shop', [Home::class, 'shop'])->name('shop');
Route::get('/cart', [Home::class, 'cart'])->name('cart');
Route::post('checkout', [Home::class, 'checkout'])->name('checkout');
Route::get('checkout_order_no/{order_no}', [Home::class, 'checkout_order_no'])->name('checkout_order_no');
Route::post('checkout-order', [Home::class, 'checkout_order'])->name('checkout-order');
Route::get('compalate-checkout-order/{invoice_no}', [Home::class, 'compalate_checkout_order'])->name('compalate-checkout-order');

Route::get('/blog', [Home::class, 'blog'])->name('blog');
Route::get('/blog_details', [Home::class, 'blog_details'])->name('blog_details');
Route::get('add-to-cart', [Home::class, 'addToCart'])->name('add.to.cart');
Route::post('update-cart', [Home::class, 'update_cart'])->name('update.cart');
Route::delete('remove-from-cart', [Home::class, 'remove'])->name('remove.from.cart');

