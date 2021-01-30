<?php

namespace App\Http\Controllers\admin;
use DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }


    public function Approved_Order(){
    	$approved_orders = DB::table('orders')
    					->join('payments', 'orders.payment_id', 'payments.id')
    					->orderBy('orders.id', 'ASC')
    					->where('status', 1)
    					->get();
    	return view('admin.orders.approved_orders', compact('approved_orders'));
    }

    public function Pending_Order(){
    	$pending_orders = DB::table('orders')->where('status', 0)
    					->join('payments', 'orders.payment_id', 'payments.id')
    					->orderBy('orders.id', 'ASC')
    					->get();
    	return view('admin.orders.pending_orders', compact('pending_orders'));
    }

    public function Order_Details($id){
    	$approved_order_details = DB::table('order_details')
    					->where('order_details.order_id', $id)
    					->join('orders', 'order_details.order_id', 'orders.id')
    					->join('products', 'order_details.product_id', 'products.id')
    					->join('shippings', 'orders.shipping_id', 'shippings.id')
    					->join('payments', 'orders.payment_id', 'payments.id')
    					->get();
    	return view('admin.orders.approved_order_details', compact('approved_order_details'));
    }
}
