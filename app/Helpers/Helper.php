<?php
 use Illuminate\Support\Facades\DB;
 use Illuminate\Support\Str;


if (!function_exists('lan_products')) {
    
        function lan_products($product_id)
        {
            $lan_products = DB::table('products')
            ->select()
            ->where('service_id', $product_id)
            ->get();
            return $lan_products;
        }
}

if (!function_exists('lan_child_products')) {
    
        function lan_child_products($prod_id)
        {
            $lan_child_products = DB::table('child_products')
            ->select()
            ->where('prod_id',$prod_id)
            ->get();
            return $lan_child_products;
        }
}


if (!function_exists('get_orders')) {
    
        function get_orders($order_id)
        {
            $get_orders = DB::table('orders')
            ->select()
            ->where('order_id',$order_id)
            ->first();
            return $get_orders;
        }
}

if (!function_exists('get_cart_order')) {
    
        function get_cart_order($order_id)
        {
            $get_cart_order = DB::table('cart_order')
            ->select()
            ->where('order_id',$order_id)
            ->join('child_products', 'child_products.cp_id', '=', 'cart_order.item_id')
            ->get();
            return $get_cart_order;
        }
}


if (!function_exists('generateAndSaveApiAuthToken')) {
    
        function generateAndSaveApiAuthToken()
        {
            $token = Str::random(60);
            $api_token = $token;
            return $api_token;
        }
}