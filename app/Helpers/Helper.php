<?php
 use Illuminate\Support\Facades\DB;

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