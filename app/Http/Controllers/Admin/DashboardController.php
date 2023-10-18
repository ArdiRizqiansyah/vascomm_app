<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $data = [
            'totalUsers' => User::count(),
            'totalUsersActive' => User::where('is_active', true)->count(),
            'totalProducts' => Product::count(),
            'totalProductsActive' => Product::where('is_active', true)->count(),
            'products' => Product::latest()->take(3)->get(),
        ];

        return view('admin.pages.dashboard', $data);
    }
}
