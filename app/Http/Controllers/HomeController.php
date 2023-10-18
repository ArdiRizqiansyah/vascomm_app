<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            
        ];

        return view('public.pages.home', $data);
    }

    public function login()
    {
        return view('auth.pages.login');
    }
}
