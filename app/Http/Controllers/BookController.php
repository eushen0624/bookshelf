<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Book;
use \App\Genre;

class BookController extends Controller
{

	public function index(){
		$books = Book::all();
    	$genres = Genre::all();
    	
    	return view('catalog', compact("books", "genres"));
	}

	public function landing(){
		return view('landingpage');
	}
   
}
