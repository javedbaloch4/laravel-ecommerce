<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index() {
        $orders = Order::all();
        return view('admin.orders.index', compact('orders'));
    }


    public function confirm($id) {

        // Find the order
        $order = Order::find($id);

        // Update the Order
        $order->update(['status' => 1]);

        // Session message
        session()->flash('msg','Order has been confirmed');

        // Redirect the page
        return redirect('admin/orders');


    }


    public function pending($id){

        // Find the order
        $order = Order::find($id);

        // Update the order status

        $order->update(['status' => 0]);

        // Session Message
        session()->flash('msg','Order has been again into pending');

        // Redirect the page
        return redirect('admin/orders');

    }

    public function show($id) {
        $order = Order::find($id);
        return view('admin.orders.details', compact('order'));
    }

}
