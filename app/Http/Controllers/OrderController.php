<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use \App\Book;
use \App\Order;
use Session;
// use \App\User;

class OrderController extends Controller
{
    public function buy($id){
    	$book = Book::find($id);
    	$owner = $book->book_owner_id;
    	// $process = Process::all();

    	// if(Auth::user()!= $owner){
    		$order = new Order;
    		$order->total=$book->price;
    		$order->user_owner_id=$book->book_owner_id;
    		$order->user_buyer_id=Auth::user()->id;
    		$order->payment_id=1;
    		$order->status_id=1;
    		$order->transaction_id=$book->transaction_type_id;
    		$order->process_id=1;
    		$order->save();

    		return redirect('/catalog');
    	// }else{
    	// 	return redirect('/login');
    	// }
    }
}

