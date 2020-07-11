<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\OrderDetails;
use App\Customer;
use App\Product;
class OrderController extends Controller
{
    public function view_order($order_code){
    	$order_details = OrderDetails::with('product')->where('order_code', $order_code)->get();
    	$order = Order::where('order_code', $order_code)->get();
    	foreach ($order as $key => $or) {
    		$customer_id = $or->customer_id;
    		$order_status = $or->order_status;
    	}
    	 $customer = Customer::where('customer_id', $customer_id)->first();
    	return view('admin.view_order')->with(compact('order_details','customer','order'));
    }
    public function manage_order(){
    	$order = Order::orderby('order_id','asc')->get();
    	return view('admin.manage_order')->with(compact('order'));
    }
}
