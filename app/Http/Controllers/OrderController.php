<?php

namespace App\Http\Controllers;

use App\Http\Resources\OrderResource;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $order = Order::paginate();
        return OrderResource::collection($order);
    }

    public function show($id)
    {
        return new OrderResource(Order::find($id));
    }
}
