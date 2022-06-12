<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\RegisterController;
use App\Http\Controllers\API\SubscriptionController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/register', [RegisterController::class, 'register']);
Route::post('/login', [RegisterController::class, 'login']);
Route::get('user-data', [RegisterController::class, 'user_data']);

Route::get('subscription-services', [SubscriptionController::class, 'subscription_services']);
Route::get('subscription-products', [SubscriptionController::class, 'subscription_products']);
Route::get('subscription-child-products', [SubscriptionController::class, 'subscription_child_products']);

Route::get('user-subscription-products', [SubscriptionController::class, 'user_subscription_products']);
Route::post('user-subscription-pro', [SubscriptionController::class, 'user_subscription_pro']);
Route::post('pause-subscription-products', [SubscriptionController::class, 'pause_subscription_products']);
Route::post('unpause-subscription-products', [SubscriptionController::class, 'unpause_subscription_products']);
Route::post('cancel-subscription-products', [SubscriptionController::class, 'cancel_subscription_products']);
Route::post('checkout', [SubscriptionController::class, 'checkout']);

// Route::middleware('auth:api')->group( function () {
//     Route::resource('products', ProductController::class);
// });