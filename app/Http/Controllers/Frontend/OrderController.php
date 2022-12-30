<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreOrder;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function store(StoreOrder $request)
    {
        $order = new Order();
        $order->name = $request->name;
        $order->email = $request->email;
        $order->phone = $request->phone;
        $order->dog_id = $request->dog_id;
        $order->location = $request->location;
        $order->payment_option = $request->payment_option;
        $order->additional_note = $request->additional_note;
        $order->order_date_time = date('Y-m-d');
        $order->save();
        return redirect()->back()->with('success', 'Your order is successful. Our team will respond you shortly.');
    }
}
