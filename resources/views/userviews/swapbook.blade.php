@extends('layouts.app')
@section('content')
	<h1>Select a Book:</h1>
	<a href="#">New Book</a>
	<div class="flex flex-row">
		@foreach($books as $book)
			<div class="max-w-sm rounded overflow-hidden shadow-lg my-5 mx-2	">				
				
					<img src="{{URL::asset('/images/book1.jpg')}}" class="w-full" alt="Picture of the Book">
					<div class="px-6 pt-4 ">
						<h1 class="font-bold text-xl mb-2">{{$book->name}}</h1>
						<hr class="mb-2">
						<p>By: {{$book->author}}</p>
						{{-- <p>Price: {{$book->price}}</p> --}}
						{{-- <p>Description: {{$book->description}}</p> --}}
						<p>Genre: {{$book->genre_id}}</p>
						{{-- <p>Transaction Type: {{$book->transaction_type_id}}</p> --}}
					</div>
					
			</div>
	  		@endforeach
	</div>
@endsection