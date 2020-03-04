<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use \App\Book;
use \App\Order;
use Session;

class OrderController extends Controller
{
    public function buy(){
    	if(Auth::user()){

    	}
    }
}


// if(Auth::user()){

//     		$order = new Order;
//     		$order->user_id = Auth::user()->id;
//     		$order->status_id = 1; //pending
//     		$order->payment_id = 1; //COD
//     		$order->total = 0;
//     		$order->save();

//     		$cart = Session::get('cart');

//     		$total = 0;
//     		foreach($cart as $itemId => $quantity){
//     			// syntax for adding entries to our many to many table
//     			$order->items()->attach($itemId, ["quantity"=>$quantity]);

//     			$item = Item::find($itemId);
//     			$total += $item->price * $quantity;
//     		}

//     		$order->total = $total;
//     		$order->save();

//     		Session::forget('cart');
//     		Session::flash('message', "Order successfully placed");
//     		return redirect('/catalog');
//     	}else{
//     		return redirect('/login');
//     	}