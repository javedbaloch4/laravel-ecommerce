<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Order;
use App\User;

class UserProfileController extends Controller
{
    public function index() {
        $id = auth()->user()->id;
        $user = User::where('id', $id)->first();

        return view('front.profile.index', compact('user'));
    }

    public function show($id) {
        $order = Order::find($id);
        return view('front.profile.details', compact('order'));
    }
}
