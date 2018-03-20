<?php

namespace App\Http\Controllers;

use App\Product;
use App\Order;
use App\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function index() {
        $product = new Product();
        $order = new Order();
        $user = new User();

        return view('admin.dashboard', compact('product','order','user'));
    }

}
