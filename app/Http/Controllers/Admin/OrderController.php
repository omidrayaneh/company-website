<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        if (auth()->user()->role != 'admin')
            abort(404);
        $orders =Order::with('machine','industry')->paginate(10);
        return view('admin.orders.index',compact(['orders']));

    }
    public function show($id)
    {
        if (auth()->user()->role != 'admin')
            abort(404);
        $order =Order::with('machine','industry')->findOrFail($id);
      $order->status = 1;
      $order->save();
        return view('admin.orders.show',compact(['order']));
   }
}
