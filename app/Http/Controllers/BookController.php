<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Book;
use \App\Genre;
use \App\TransactionType;

class BookController extends Controller
{

	public function index(){
		$books = Book::all();
    	$genres = Genre::all();
        $transaction_types = TransactionType::all();        
    	
    	return view('catalog', compact("books", "genres", "transaction_types"));
	}

	public function landing(){
		return view('landingpage');
	}

	public function viewBook($id){
        $book = Book::find($id);
        $genres = Genre::all();
        $transaction_types = TransactionType::all();        
        
        return view('userviews.viewbook', compact("book", "genres", "transaction_types"));
	}

    public function filter($id){
    	$books = Book::where('genre_id', $id)->get();

    	return view('catalog', compact('books'));
    }

    public function sort($sort){
    	$books = Book::orderBy('price', $sort)->get();

    	return view('catalog', compact('books'));
    }

    public function addbook(){
    	$genres = Genre::all();
    	$transaction_types = TransactionType::all();

    	return view('userviews.addbook', compact('genres', 'transaction_types'));

    }


    public function save(Request $req){
    	//validate
    	$rules = array(
    		"name"=> "required",
    		"author"=> "required",
    		"description"=>"required",
    		"price"=>"required|numeric",
    		"genre_id"=>"required",
    		"transaction_type_id"=>"required",
    		"imgPath"=>"required|image|mimes:jpeg,jpg,png,gif,tiff,tif,webp,bitmap"
    	);

    	$this->validate($req, $rules);

    	// capture;
    	$newBook = new Book;
    	$newBook->name=$req->name;
    	$newBook->author=$req->author;
    	$newBook->description = $req->description;
    	$newBook->price=$req->price;
    	$newBook->genre_id=$req->genre_id;
    	$newBook->transaction_type_id=$req->transaction_type_id;

    	//image handling
    	$image = $req->file('imgPath');
    	$image_name = time().".".$image->getClientOriginalExtension();

    	//corresponds to the images public directory
    	$destination = "images/";
    	$image->move($destination, $image_name);

    	$newBook->imgPath = $destination.$image_name;
    	
    	//save
    	$newBook->save();

    	return redirect('/catalog');
    	
    	
    }
    

    public function showshelf(){
        $books = Book::all();
        $genres = Genre::all();
        $transaction_types = TransactionType::all();        
        
        return view('userviews.showshelf', compact("books", "genres", "transaction_types"));

    }

    public function edit($id){
        $book = Book::find($id);
        $genres = Genre::all();
        $transaction_types = TransactionType::all();        
        
        return view('userviews.editbook', compact("book", "genres", "transaction_types"));    
    }

    public function update($id, Request $req){
        $book = Book::find($id);

        $rules = array(
            "name" => "required",
            "author" => "required",
            "description" => "required",
            "price" => "required|numeric",
            "genre_id" => "required",
            "transaction_type_id" => "required",
            "imgPath" => "image|mimes:jpeg,jpg,png,gif,tiff,tif,bitmap,webP"
        );

        $this->validate($req, $rules);

        $book->name = $req->name;
        $book->author = $req->author;
        $book->description = $req->description;
        $book->price = $req->price;
        $book->genre_id = $req->genre_id;
        $book->transaction_type_id = $req->transaction_type_id;
   
       if($req->file('imgPath') != null){
                $image = $req->file('imgPath');
                $image_name = time(). ".".$image->getClientOriginalExtension();
                $destination = "images/";
                $image->move($destination, $image_name);
                $book->imgPath = $destination.$image_name;
            }

            $book->save();
            return redirect('/showshelf');
    }

    public function adminDashboard(){
        return view('adminviews.dashboard');
    }
   
}
