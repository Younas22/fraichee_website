<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Hash;
use Session;
use App\Models\User;
use DB;
use Stripe;
// 

class Home extends Controller
{

    //home
    public function index()
    {
        $blog = DB::table('blog')->get();
        return view('home.home', 
                compact(
                'blog'
            ));
    }

    //shop
    public function shop(Request $request)
    {

        $laundary = DB::table('categories')->select()->where('panel', 'laundary')->get();
        $subscribe = DB::table('categories')->select()->where('panel', 'subscribe')->get();

        // dd($lan_products);
            return view('home.shop', 
                compact(
                'laundary',
                'subscribe'
            ));
      
        return redirect("login")->withSuccess('You are not allowed to access');
    }

    //cart
    public function cart()
    {

        // dd(session('cart'));
        if (empty(session('cart'))) {
           return redirect()->back();
        }
         return view('home.cart');
    }

    //checkout
    public function checkout(Request $request)
    {
        // dd(session('cart')); 
        if ($request->panel == 'laundary') {
            $order_data = [
                'user_id' => session('logAdmin')->user_id,
                'order_type' => $request->panel,
                // 'order_date' => date('m-d-Y'),
                'note_box' => $request->note_box,
                'other_address' => $request->other_address,
                'pickup_date' => $request->pickup_dates,
                'delivery_date' => $request->delivery_dates,
                'amount' => $request->total_cost
            ];

            $laundary = DB::table('orders')->insertGetId($order_data);
            foreach (session('cart') as $id => $cart) {
                $cart_order = [
                    'order_id'=>$laundary,
                    'item_id'=>$id,
                    'price'=>$cart['price'],
                    'quantity'=>$cart['quantity']
                ];

                DB::table('cart_order')->insertGetId($cart_order);
            }
        }else{
            $total_cost = 0;
            $delivery_options = $request->delivery_options;
            if($delivery_options == 1) {
                $total_cost = $request->total_cost;
            }
            if($delivery_options == 2) {
                $total_cost = $request->total_cost;
            }

            $order_data = [
                'user_id' => session('logAdmin')->user_id,
                'order_type' => $request->panel,
                // 'order_date' => date('m-d-Y'),
                'note_box' => $request->note_box,
                'other_address' => $request->other_address,
                'delivery_options' => $request->delivery_options,
                'first_day' => $request->first_day,
                'second_day' => $request->second_day,
                'delivery_date' => $request->delivery_dates,
                'amount' => $total_cost
            ];


            $laundary = DB::table('orders')->insertGetId($order_data);
            foreach (session('cart') as $id => $cart) {
                $cart_order = [
                    'order_id'=>$laundary,
                    'item_id'=>$id,
                    'price'=>$cart['price'],
                    'quantity'=>$cart['quantity']
                ];

                DB::table('cart_order')->insertGetId($cart_order);
            }
        }

        return redirect(route('checkout_order_no',$laundary));
    }


    //checkout_order_no
    public function checkout_order_no(Request $request)
    {
        $order_id = $request->order_no;
        // dd($order_id);

        return view('home.checkout',compact('order_id'));
    }


    //checkout-order-
    public function checkout_order(Request $request)
    {

//card details for strip
       // $card_no = $request->card_no;
       // $month = $request->month;
       // $year = $request->year;
       // $cvc = $request->cvc;
        // dd($request->total_cost);

        $amount = $request->total_cost;

        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Charge::create ([
                "amount" => $amount*100,
                "currency" => "gbp",
                "source" => $request->stripeToken,
                "description" => "This payment is tested purpose fraichee.com"
        ]);
   
        // Session::flash('success', 'Payment successful!');





        $invoice_id = 'F'.rand(10,10000);
            $payment_details = [
                'card_holder_name' => $request->card_holder_name,
                'card_type' => 'visa',
                'invoice_id' => $invoice_id,
                'status' => 1
            ];

        DB::table('orders')->where('order_id', $request->order_id)->update($payment_details);
        // Session::flush();
        Session::forget('cart');
        return redirect(route('compalate-checkout-order',$invoice_id));
    }



    //complate-checkout-order
    public function compalate_checkout_order(Request $request)
    { 
        $invoice_id = $request->invoice_no;
        return view('home.compalate_checkout_order',compact('invoice_id'));
    }


    //blog
    public function blog()
    {
        $blog = DB::table('blog')->paginate(6);
        return view('home.blog', 
                compact(
                'blog'
            ));
    }

    //blog_details
    public function blog_details()
    {
        return view('home.blog_details');
    }

 
//addToCart
        public function addToCart(Request $request)
    {
        $product = $lan_child_products = DB::table('child_products')
            ->select()
            ->where('cp_id',$request->id)
            ->join('products', 'products.prod_id', '=', 'child_products.prod_id')
            ->join('categories', 'categories.service_id', '=', 'child_products.service_id')
            ->first();
            // dd($product);
        if (session('cart')) {
            foreach(session('cart') as $cart) {
                if ($cart['cat_panel'] != $product->panel) {
                    return json_encode(array('msg'=>'befor '.$product->panel.' item you need clear cart','status'=>201));
                }
            }
        }

        $cart = session()->get('cart', []);
  
        if(isset($cart[$request->id])) {
            $cart[$request->id]['quantity']++;
        } else {
            $cart[$request->id] = [
                "cat_id" => $product->service_id,
                "cat_name" => $product->name,
                "cat_panel" => $product->panel,
                "prod_id" => $product->prod_id,
                "title" => $product->title,
                "name" => $product->cp_name,
                "quantity" => 1,
                "image" => $product->cp_image,
                "price" => $product->cp_price
            ];
        }
          
        session()->put('cart', $cart);

        return json_encode(array('msg'=>'Product added to cart successfully','status'=>200));
        // return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    //update_cart
        public function update_cart(Request $request)
    {
        if($request->id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart updated successfully');
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }
    }



    //remove
        public function remove(Request $request)
    {
        if (count(session()->get('cart')) == 1) {
            if($request->id) {
                $cart = session()->get('cart');
                if(isset($cart[$request->id])) {
                    unset($cart[$request->id]);
                    session()->put('cart', $cart);
                }
                session()->flash('success', 'Product removed successfully');
            }
            return 0;
        }else{
            if($request->id) {
                $cart = session()->get('cart');
                if(isset($cart[$request->id])) {
                    unset($cart[$request->id]);
                    session()->put('cart', $cart);
                }
                session()->flash('success', 'Product removed successfully');
            }
            return 1;
        }
    }
}