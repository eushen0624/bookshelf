<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('landingpage');
});

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');

//user profile
Route::get('/profile', 'RoleController@profile');

//view catalog
Route::get('/catalog', 'BookController@index');

//Filter
Route::get('/catalog/{id}', 'BookController@filter');

//Sort
Route::get('/catalog/sort/{sort}', 'BookController@sort');

//Show Books in Shelf
Route::get('/showshelf', 'BookController@showshelf');


//ADMIN ROUTES
Route::middleware("admin")->group(function(){

	//Admin Dashboard
	Route::get('/admindashboard', 'BookController@adminDashboard');
	//View users
	Route::get('/viewusers', 'BookController@viewusers');

	Route::get('/changerole/{id}', 'BookController@changeRole');
});


//USER ROUTE
Route::middleware('user')->group(function(){

	//Viewbook
	Route::get('/viewbook/{id}', 'BookController@viewBook');

	//Add new book
	Route::get('/addbook', 'BookController@addbook');

	//saving the book
	Route::post('/addbook', 'BookController@save');

	//Edit Book
	Route::get('/editbook/{id}', 'BookController@edit');
	
	//Save Changes 
	Route::patch('/editbook/{id}', 'BookController@update');

	//Delete Book
	Route::delete('/deletebook/{id}', 'BookController@deletebook');

	//Buy Book
	Route::get('/buy/{id}', 'OrderController@buy');

});


