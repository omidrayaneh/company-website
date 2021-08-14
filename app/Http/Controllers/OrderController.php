<?php

namespace App\Http\Controllers;

use App\Events\OrderEvent;
use App\Http\Requests\OrderCustomerRequest;
use App\Http\Requests\OrderRequest;
use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function store(OrderRequest $request)
    {

        $inputs = $request->only(['name','email','address', 'company', 'mobile','phone','role']);

        $order = new Order();
        $order->name = $inputs['name'];
        $order->role = $inputs['role'];
        $order->address = $inputs['address'];
        $order->company = $inputs['company'];
        $order->mobile = $inputs['mobile'];
        $order->email = $inputs['email'];
        $order->phone = $inputs['phone'];
        $order->save();
        event(new OrderEvent($order));

        alert()->persistent('باشه')->success('موفق','با تشکر از انتخاب شما ،کارشناسان فروش ما در اسرع وقت با شما تماس خواهند گرفت. ');
        return redirect('/');
    }
    public function store_customer(OrderCustomerRequest $request)
    {

        $inputs = $request->only(['name','email','address', 'company', 'mobile','phone','machine','industry','role']);

        $order = new Order();
        $order->name = $inputs['name'];
        $order->role = $inputs['role'];
        $order->address = $inputs['address'];
        $order->company = $inputs['company'];
        $order->mobile = $inputs['mobile'];
        $order->email = $inputs['email'];
        $order->phone = $inputs['phone'];
        $order->machine_id = $inputs['machine'];
        $order->industry_id = $inputs['industry'];
        $order->save();
        event(new OrderEvent($order));

        alert()->persistent('باشه')->success('موفق','با تشکر از انتخاب شما ،کارشناسان فروش ما در اسرع وقت با شما تماس خواهند گرفت. ');

        return redirect('/');
    }
}
