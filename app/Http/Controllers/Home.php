<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use DB;
use Stripe;
// 

class Home extends Controller
{

    //home
    public function index()
    {
        return view('home.home');
    }

    //shop
    public function shop(Request $request)
    {

        $laundary = DB::table('categories')->select()->where('panel', 'laundary')->get();
        $subscribe = DB::table('categories')->select()->where('panel', 'subscribe')->get();

        // dd($laundary);

        // $sub_products = DB::table('products')
        // ->select()
        // ->where('categories.panel', 'subscribe')
        // ->join('categories', 'categories.service_id', '=', 'products.service_id')
        // ->get();


        // $child_products = DB::table('child_products')
        // ->select()
        // ->where('prod_id',$request->pid)
        // ->get();


        // dd($lan_products);
            return view('home.shop', 
                compact(
                'laundary',
                'subscribe'
            ));
    }

    //cart
    public function cart()
    {

        return view('home.cart');
    }

    //checkout
    public function checkout(Request $request)
    {
        // dd($request->total_cost);
        // dd(session('cart')); 
        $order_data = [
            'user_id' => 10,
            'order_type' => 'laundry',
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
        return redirect(route('checkout_order_no',$laundary));
    }


    //checkout_order_no
    public function checkout_order_no(Request $request)
    {
        $order_id = $request->order_no;
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
        Session::flush();
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
        return view('home.blog');
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
            ->first();
            // dd($product);
          
        $cart = session()->get('cart', []);
  
        if(isset($cart[$request->id])) {
            $cart[$request->id]['quantity']++;
        } else {
            $cart[$request->id] = [
                "name" => $product->cp_name,
                "quantity" => 1,
                "image" => $product->cp_image,
                "price" => $product->cp_price
            ];
        }
          
        session()->put('cart', $cart);


        return redirect()->back()->with('success', 'Product added to cart successfully!');
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
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product removed successfully');
        }
    }
}