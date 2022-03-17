<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use DB;
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
    public function checkout()
    {
        return view('home.checkout');
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
}