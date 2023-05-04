<?php

namespace App\Http\Controllers;

use App\Models\order_items;
use Illuminate\Http\Request;

class orderItemsController extends Controller
{
    public function index(){
        $orderitems = order_items::all();
         return view('order_items', ['orderList' => $orderitems]);
    }
    public function create(){
        return view('input_order');
    }
    public function store(Request $request){
        $order = new orderItemsController;
        $order->date = $request->date;
        $order->quantity = $request->quantity;
        $order->products_id = $request->products_id;
        $order->user_id = $request->user_id;
        $order->save();
    }
}
