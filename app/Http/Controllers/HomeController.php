<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $newProducts = Product::latest()->isActive()->take(10)->get();

        $data = [
            'newProducts' => $newProducts,
            'products' => Product::filter()->isActive()->whereNotIn('id', $newProducts->pluck('id')->toArray())->paginate(10),
        ];

        return view('public.pages.home', $data);
    }
}
