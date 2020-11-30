<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Order;

class AdminController extends Controller
{
    
    public function dashboard(){

        return view('admin.dashboard');
    }

    public function orders(){

        $orders = Order::all();

        $orders->transform(function ($order,$key){
                   
              $order->cart = unserialize($order->cart);

              return $order;
        });

        return view('admin.Orders.index')->with('orders',$orders);
    }
}
