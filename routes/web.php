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

//view catalog
Route::get('/catalog', 'BookController@index');

//Viewbook
Route::get('/viewbook', 'BookController@viewBook');

//Filter
Route::get('/catalog/{id}', 'BookController@filter');

//Sort
Route::get('/catalog/sort/{sort}', 'BookController@sort');

//Add new book
Route::get('/addbook', 'BookController@addbook');

//saving the book
Route::post('/addbook', 'BookController@save');

//user profile
Route::get('/profile', 'BookController@profile');