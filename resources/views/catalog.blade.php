@extends('layouts.app')
@section('content')
	<section class="container">
		<div class="flex flex-row">
			<a href="#" class="bg-blue-500 hover:bg-blue-700 text-white text-center font-bold py-3 px-4 mx-2 w-1/6 rounded 	hover:no-underline" >Fiction</a>

			<a href="#" class="bg-purple-500 hover:bg-purple-700 text-white text-center font-bold py-3 px-4 mx-2 w-1/6 rounded hover:no-underline">Romance</a>

			<a href="#" class="bg-red-500 hover:bg-red-700 text-white text-center font-bold py-3 px-4 mx-2 w-1/6 rounded hover:no-underline">Drama</a>

			<a href="#" class="bg-yellow-500 hover:bg-yellow-700 text-white text-center font-bold py-3 px-4 mx-2 w-1/6 rounded hover:no-underline">Thriller</a>

			<a href="#" class="bg-green-500 hover:bg-green-700 text-white text-center font-bold py-3 px-4 mx-2 w-1/6 rounded hover:no-underline">Fantasy</a>

			<a href="#" class="bg-gray-500 hover:bg-gray-700 text-white text-center font-bold py-3 px-4 mx-2 w-1/6 rounded hover:no-underline">Sci-fi</a>

		</div>
		
		{{-- row --}}
		<div class="flex justify-center">
			
		<div class="flex flex-row ">

			<div class="my-5 mr-3">
			<h4 class="mb-2 font-bold">Sort by Price:</h4>
				<select class="py-1 px-3 rounded">
					<option>
						Cheapest First
					</option>
					<option>
						Most Expensive First
					</option>
				</select>
			</div>
			{{-- card --}}
			@foreach($books as $book)
			<div class="max-w-sm rounded overflow-hidden shadow-lg my-5 mx-2	">				
				
					<img src="{{URL::asset('/images/book1.jpg')}}" class="w-full" alt="Picture of the Book">
					<div class="px-6 pt-4 ">
						<h1 class="font-bold text-xl mb-2">{{$book->name}}</h1>
						<hr class="mb-2">
						<p>By: {{$book->author}}</p>
						<p>Price: {{$book->price}}</p>
						<p>Description: {{$book->description}}</p>
						<p>Genre: {{$book->genre_id}}</p>
						<p>Transaction Type: {{$book->transaction_type_id}}</p>
					</div>
					<div class="px-6 py-4 flex justify-center">

						<form action="" method="POST">
								@csrf
								
								<button class="inline-block bg-green-500 rounded px-3 py-2 mt-2 text-sm font-semibold text-white-700 mr-2 hover:bg-green-700">
									Contact Owner
								</button>
								<button class="inline-block bg-yellow-500 rounded px-3 py-2 mt-2 text-sm font-semibold text-white-700 mr-2 hover:bg-yellow-700" onclick="" type="submit">
									Add to Wish List
								</button>
						</form>
		  			</div>
			
			</div>
	  		@endforeach
		</div>
		</div>



		</section>
@endsection