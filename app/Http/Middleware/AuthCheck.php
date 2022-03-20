<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AuthCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {

        // dd(session('logAdmin')->role);
        // if (Auth::check()) {
        //         if (Auth::user()->role == 'admin') {
        //             return $next($request);
        //         }else{
        //             return redirect('/login');
        //         }
        // }else{
        //         return redirect('/login');
        // }




        if(!session()->has('logAdmin')  && session('logAdmin')->role == 'admin'){
            return redirect('/admin')->with('fail','You Must Login First');
        }


        // if(session()->has('logAdmin') && ($request->path() == '/admin')){
        //     return back();
        // }




        if(!session()->has('logAdmin')  && session('logAdmin')->role == 'customer'){
            return redirect('/login')->with('fail','You Must Login First');
        }

        // if(session()->has('logAdmin') &&  session('logAdmin')->role == 'customer'){
        //     return back();
        // }

        return $next($request)->header('Cache-Control', 'no-cache, no-store,max-age=0,must-revalidate' )
                              ->header('Pragma','no-cache')
                              ->header('Expires', 'Sat 01 Jan 1990 00:00:00 GM');
    }
}
