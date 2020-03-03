@extends('layouts.app')
@section('content')
	<section class="container mt-4">
		{{-- Filter by Genre --}}
		<div class="flex flex-row">
				<a href="/catalog" class="bg-orange-500 hover:bg-red-700 text-white text-center font-bold py-3 px-4 mx-2 w-1/6 rounded hover:no-underline">All</a>
			
				<a href="/catalog/{{1}}" class="bg-gray-500 hover:bg-gray-700 text-white text-center font-bold py-3 px-4 mx-2 w-1/6 rounded hover:no-underline">Sci-fi</a>

				<a href="/catalog/{{2}}" class="bg-purple-500 hover:bg-purple-700 text-white text-center font-bold py-3 px-4 mx-2 w-1/6 rounded hover:no-underline">Romance</a>

				<a href="/catalog/{{3}}" class="bg-blue-500 hover:bg-blue-700 text-white text-center font-bold py-3 px-4 mx-2 w-1/6 rounded 	hover:no-underline" >Fiction</a>

				<a href="/catalog/{{4}}" class="bg-yellow-500 hover:bg-yellow-700 text-white text-center font-bold py-3 px-4 mx-2 w-1/6 rounded hover:no-underline">Thriller</a>

				<a href="/catalog/{{5}}" class="bg-green-500 hover:bg-green-700 text-white text-center font-bold py-3 px-4 mx-2 w-1/6 rounded hover:no-underline">Fantasy</a>
		
				<a href="/catalog/{{6}}" class="bg-red-500 hover:bg-red-700 text-white text-center font-bold py-3 px-4 mx-2 w-1/6 rounded hover:no-underline">Drama</a>

		</div>
		
		{{-- row --}}
		<div class="container">
			
		<div class="flex flex-row ">
			{{-- Sort by price --}}
			<div class="my-5 mr-3">
			<h4 class="mb-2 font-bold">Sort by Price:</h4>
				<select class="py-1 px-3 rounded" id="sortByPrice" onchange="sort()">
					<option value="/catalog/sort/asc">
						Cheapest First
					</option>
					<option value="/catalog/sort/desc">
						Most Expensive First
					</option>
				</select>
			</div>
		{{-- card --}}
		<div class="col-lg-10">
			<div class="row w-100">
				@foreach($books as $book)
				<div class="col-lg-4 p-3 my-2">
					{{-- <div class="max-w-sm rounded overflow-hidden shadow-lg border-r border-b border-l border-gray-400"> --}}
					<div class="border-t border-r border-b border-l border-blue-400 bg-white rounded p-4 flex flex-col justify-between leading-normal">
						<div class="relative" style="width: 250px; height: 320px;">
							<img src="{{asset($book->imgPath)}}" class="absolute object-cover h-full w-full" alt="Picture of the Book" >
						</div>
						<div class="px-6 pt-4 ">
							<h1 class="font-bold text-xl mb-2">{{$book->name}}</h1>
							<hr class="mb-2 bg-blue-200">
							<p>By: {{$book->author}}</p>
							<p>Price: {{$book->price}}</p>
							<p>Description: {{$book->description}}</p>
							<p>Genre: {{$book->genre->name}}</p>
							<p>Transaction Type: {{$book->transaction_type->name}}</p>
						</div>
						
						<div class="px-6 py-4 flex justify-center">
							<a href="/viewbook/{{$book->id}}" class="btn btn-success">View Details</a>
			  			</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>		
		</div>
		</div>
		</section>

		<script type="text/javascript">
			const sort = () =>{
				booksort = document.querySelector('#sortByPrice').value;

				window.location.replace(booksort);
			}

		</script>
@endsection