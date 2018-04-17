<?php

namespace App\Http\Controllers\Front;

use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index() {

        $products = Product::inRandomOrder()->take(4)->get();

        return view('front.index', compact('products'));
    }
}
