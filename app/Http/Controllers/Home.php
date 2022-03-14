<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;


class Home extends Controller
{

    public function index()
    {
        // echo "string"; exit();
        return view('home.home');
    }
}