<?php
   
namespace App\Http\Controllers\API;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
// use App\Models\User;
use Session;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Validator;
use Illuminate\Support\Facades\DB;
   
class SubscriptionController extends BaseController
{
	    public function subscription_services(Request $request)
    {
        $subscribe = DB::table('categories')->select()->where('panel', 'subscribe')->get();
        return $this->sendResponse($subscribe, 'subscription services getting successfully.');
    }

       public function subscription_products(Request $request)
    {
        $lan_child_products = DB::table('products')->select()->where('service_id',$request->service_id)->get();
        return $this->sendResponse($lan_child_products, 'subscription products getting successfully.');
    }

       public function subscription_child_products(Request $request)
    {
        $lan_child_products = DB::table('child_products')->select()
            ->where('prod_id',$request->product_id)
            ->get();
        return $this->sendResponse($lan_child_products, 'subscription child products getting successfully.');
    }

	    public function user_subscription_products(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'required'
        ]);
   
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
   
        $customer_order = DB::table('orders')
        ->select('orders.*','users.name','users.email','users.contact')
        ->where('orders.order_type', 'subscribe')
        ->where('orders.user_id', $request->user_id)
        ->join('users', 'users.user_id', '=', 'orders.user_id')->get();

        $success['user_subscription'] =  $customer_order;
   
        return $this->sendResponse($success, 'User subscription products data.');
    }


        public function user_subscription_pro(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'order_id' => 'required'
        ]);
   
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
   
        $order_details = DB::table('cart_order')
        ->select('cart_order.*','child_products.cp_name as name','child_products.cp_image','categories.name as service_name')
        ->where('cart_order.order_id', $request->order_id)
        ->join('child_products', 'child_products.cp_id', '=', 'cart_order.item_id')
        ->join('categories', 'categories.service_id', '=', 'child_products.service_id')
        ->get();

        $success['order_detail'] =  $order_details;
   
        return $this->sendResponse($success, 'User subscription order detail');
    }
  

        public function subscription_product_view(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'product_id' => 'required'
        ]);
   
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
   
        $lan_child_products = DB::table('child_products')->select()
        ->where('cp_id',$request->product_id)
        ->join('products', 'products.prod_id', '=', 'child_products.prod_id')
        ->join('categories', 'categories.service_id', '=', 'child_products.service_id')
        ->first();

        $success['cp_id'] =  $lan_child_products->cp_id;
        $success['cp_name'] =  $lan_child_products->cp_name;
        $success['cp_price'] =  $lan_child_products->cp_price;
        $success['cp_desc'] =  $lan_child_products->cp_desc;
        $success['cp_image'] =  env('APP_URL').'public/assets/web/img/'.$lan_child_products->cp_image;
        $success['service_id'] =  $lan_child_products->service_id;
        $success['services_name'] =  $lan_child_products->title;
        $success['services_image'] =  env('APP_URL').'public/assets/web/img/'.$lan_child_products->image;
        $success['product_id'] =  $lan_child_products->prod_id;
        $success['product_name'] =  $lan_child_products->name;
   
        return $this->sendResponse($success, 'product view fetched.');
    }


//add to cart
   	    public function addtocart_product(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'cp_id' => 'required'
        ]);
   
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $product = $lan_child_products = DB::table('child_products')
            ->select()
            ->where('cp_id',$request->cp_id)
            ->join('products', 'products.prod_id', '=', 'child_products.prod_id')
            ->join('categories', 'categories.service_id', '=', 'child_products.service_id')
            ->first();


        $cart = session()->get('cart_data', []);
        if(isset($cart[$request->cp_id])) {
            $cart[$request->cp_id]['quantity']++;
        } else {
            $cart[$request->cp_id] = [
                "cat_id" => $product->service_id,
                "cat_name" => $product->name,
                "cat_panel" => $product->panel,
                "prod_id" => $product->prod_id,
                "title" => $product->title,
                "name" => $product->cp_name,
                "quantity" => 1,
                "image" => env('APP_URL').'public/assets/web/img/'.$product->cp_image,
                "price" => $product->cp_price
            ];
        }
          
        Session()->put('cart_data', $cart);
   
        return $this->sendResponse(Session('cart_data'), 'Product added to cart successfully.');
    }

        //update_cart
        public function update_products_cart(Request $request)
    {
         $validator = Validator::make($request->all(), [
            'cp_id' => 'required',
            'quantity' => 'required'
        ]);
   
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        if($request->cp_id && $request->quantity){
            $cart = session()->get('cart_data');
            $cart[$request->cp_id]["quantity"] = $request->quantity;
            session()->put('cart_data', $cart);
            return $this->sendResponse(session('cart_data'), 'Cart updated successfully');
        }
    }


//remove
        public function remove_cart(Request $request)
    {
        if (count(session()->get('cart_data')) == 1) {
            if($request->cp_id) {
                $cart = session()->get('cart_data');
                if(isset($cart[$request->cp_id])) {
                    unset($cart[$request->cp_id]);
                    session()->put('cart_data', $cart);
                }
            }
            return $this->sendResponse(session('cart_data'), 'Product removed successfully');
            
        }else{
            if($request->cp_id) {
                $cart = session()->get('cart_data');
                if(isset($cart[$request->cp_id])) {
                    unset($cart[$request->cp_id]);
                    session()->put('cart_data', $cart);
                }
            }
            return $this->sendResponse(session('cart_data'), 'Product removed successfully');
        }
    }

//cart-details
        public function cart_details(Request $request)
    {
        if (session('cart_data') != null) {
            return $this->sendResponse(session('cart_data'), 'cart data');
            
        }else{
            return $this->sendResponse(session('cart_data'), 'cart is empty');
        }
    }

        public function check_bill_details(Request $request)
    {

        if (session('cart_data') != null) {
            $validator = Validator::make($request->all(), [
                'user_id' => 'required',
                'delivery_option' => 'required',
                'day_one' => 'required'
                ]);
       
            if($validator->fails()){
                return $this->sendError('Validation Error.', $validator->errors());       
            }
        }else{
            return $this->sendResponse(session('cart_data'), 'first you need to add item in cart');
        }

        if(session('cart_data')){
            $total = 0;
            foreach (session('cart_data') as $id => $cart) {
                    $total = $total + $cart['price']*$cart['quantity']; 
                }
        }
   
        $user_id = $request->user_id;
        $delivery_option = $request->delivery_option;

        if ($delivery_option == 2) {
            $day_one = $request->day_one;
            $day_two = $request->day_two;
            $delivery_days = $day_one .','. $day_two;

            if (empty($day_two)) {
               $validator = Validator::make($request->all(), [
                'day_two' => 'required'
                ]);
       
                if($validator->fails()){
                    return $this->sendError('Validation Error.', $validator->errors());       
                }
            }


        //bill details for 2 delivery a week
            $with_fee = $total+2.99+1.99;
            $with_number = $with_fee*8;
            $vat = $with_number*20/100;
            $final_total = $with_number+$vat;
        }

       if ($delivery_option == 1) {
            $day_one = $request->day_one;
            $delivery_days = $day_one;
            //bill details for 1 delivery a week
            $with_fee = $total+2.99+1.99;
            $with_number = $with_fee*4;
            $vat = $with_number*20/100;
            $final_total = $with_number+$vat;
        }


        $success['user_id'] = $request->user_id;
        $success['delivery_option'] = $delivery_option;
        $success['delivery_days'] = $delivery_days;
        $success['cart_data'] = session('cart_data');
        $success['subtotal'] =  $total;
        $success['delivery_fee'] =  2.99;
        $success['total'] = number_format((float)$with_number, 2, '.', '');
        $success['grand_total'] = number_format((float)$final_total, 2, '.', '');

   
        return $this->sendResponse($success, 'subscription products billing details.');
    }  


        public function place_order(Request $request)
    {
        if (session('cart_data') != null) {
            $validator = Validator::make($request->all(), [
                'user_id' => 'required',
                'delivery_option' => 'required',
                'day_one' => 'required',
                'grand_total' => 'required'
                ]);
       
        if($validator->fails()){
                return $this->sendError('Validation Error.', $validator->errors());       
            }
        }else{
            return $this->sendResponse(session('cart_data'), 'first you need to add item in cart');
        }

        $user_id = $request->user_id;
        $delivery_option = $request->delivery_option;
        $grand_total = $request->grand_total;

        if ($delivery_option == 2) {
            $order_data = [
                'user_id' => $user_id,
                'order_type' => 'subscribe',
                // 'order_date' => date('m-d-Y'),
                'note_box' => $request->note,
                'other_address' => $request->other_address,
                'delivery_options' => $delivery_option,
                'first_day' => $request->day_one,
                'second_day' => $request->day_two,
                'delivery_date' => $request->delivery_date,
                'amount' => $grand_total
            ];
        }

       if ($delivery_option == 1) {
            $order_data = [
                'user_id' => $user_id,
                'order_type' => 'subscribe',
                // 'order_date' => date('m-d-Y'),
                'note_box' => $request->note,
                'other_address' => $request->other_address,
                'delivery_options' => $delivery_option,
                'first_day' => $request->day_one,
                'second_day' => $request->day_two,
                'delivery_date' => $request->delivery_date,
                'amount' => $grand_total
            ];
        }


        $subscribe = DB::table('orders')->insertGetId($order_data);
            foreach (session('cart_data') as $id => $cart) {
                $cart_order = [
                    'order_id'=>$subscribe,
                    'item_id'=>$id,
                    'price'=>$cart['price'],
                    'quantity'=>$cart['quantity']
                ];

                DB::table('cart_order')->insertGetId($cart_order);
            }

        $get_order = DB::table('orders')->where('order_id',$subscribe)->first();
        $success['order_number'] = $get_order->order_id;
        $success['grand_total'] = $get_order->amount;
        $success['payment_status'] = $get_order->payment_status;
        return $this->sendResponse($success, 'order succeed!');
    }

        public function checkout(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'order_number' => 'required',
            'amount' => 'required',
            'card_holder_name' => 'required'
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }


        $invoice_id = 'F'.rand(10,10000);
        $payment_details = [
            'card_holder_name' => $request->card_holder_name,
            'card_type' => 'visa',
            'invoice_id' => $invoice_id,
            'payment_status' => 'paid',
            'status' => 1
        ];

        DB::table('orders')->where('order_id', $request->order_number)->update($payment_details);
        Session::forget('cart_data');

        $success['invoice_id'] = $invoice_id;
        return $this->sendResponse($success, 'your order paid!');
    }



   	    public function pause_subscription_products(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'order_number' => 'required',
            'pause_status' => 'required'
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
        

        $pause_subscription_products = [
            'pause_status' => $request->pause_status
        ];

        DB::table('orders')->where('order_id', $request->order_number)->update($pause_subscription_products);

        if ($request->pause_status == 1) {
            $pause_status = 'paused';
        }else{
            $pause_status = 'actived';
        }

        $success['order_number'] = $request->order_number;
        return $this->sendResponse($success, 'Your subscription is '. $pause_status);
    }
    

   	    public function cancel_subscription_products(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'order_number' => 'required',
            'cancel_status' => 'required'
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
        

        if ($request->cancel_status == 1) {
            $cancel_status = 'canceled';
            DB::table('orders')->where('order_id', $request->order_number)->update(['cancel_status' => $request->cancel_status]);

        $success['order_number'] = $request->order_number;
        return $this->sendResponse($success, 'Your subscription is '. $cancel_status);

        }else{
            $success['order_number'] = $request->order_number;
            return $this->sendResponse($success, 'cancel_status value is Invalid!');
        }


    }


}