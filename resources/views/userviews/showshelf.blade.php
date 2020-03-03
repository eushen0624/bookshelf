@extends('layouts.app')
@section('content')

	<div class="container">
			<h1 class="text-center p-3 text-4xl font-bold">IN SHELF</h1>
			<hr>
		<div class="flex flex-row ">
		{{-- card --}}
			<div class="col-lg-10">
				<div class="row w-100">

					@foreach($books as $book)
					
					<div class="col-lg-4 p-3 my-2">
						<div class="card">
							<img src="{{asset($book->imgPath)}}" class="w-full object-cover" alt="Picture of the Book">
							<div class="px-6 pt-4 ">
								<h1 class="font-bold text-xl mb-2">{{$book->name}}</h1>
								<hr class="mb-2">
								<p>By: {{$book->author}}</p>
								<p>Price: {{$book->price}}</p>
								<p>Description: {{$book->description}}</p>
								<p>Genre: {{$book->genre->name}}</p>
								<p>Transaction Type: {{$book->transaction_type->name}}</p>
							</div>
							<div class="px-6 py-4 flex justify-center">
								<a href="/editbook/{{$book->id}}" class="inline-block bg-green-500 rounded px-3 py-2 mt-2 text-sm font-semibold mr-2 hover:bg-green-700 hover:no-underline hover:text-white">
									Edit
								</a>

								<form action="/deletebook/{{$book->id}}" method="POST">
										@csrf
										@method('DELETE')
										<button class="inline-block bg-red-500 rounded px-3 py-2 mt-2 text-sm font-semibold text-white-700 mr-2 hover:bg-yellow-700 hover:text-white" onclick="" type="submit">
											Delete
										</button>
								</form>
										
				  			</div>
						</div>
					</div>
					@endforeach
				</div>
			</div>		
		</div>
	</div>

		{{-- OUT SHELF --}}

	<div class="container">
			<h1 class="text-center p-3 text-4xl font-bold">OUT SHELF</h1>
			<hr>
		<div class="flex flex-row ">
		{{-- card --}}
			<div class="col-lg-10">
				<div class="row w-100">
					@foreach($books as $book)
					<div class="col-lg-4 p-3 my-2">
						<div class="card">
							<img src="{{asset($book->imgPath)}}" class="w-full" alt="Picture of the Book">
							<div class="px-6 pt-4 ">
								<h1 class="font-bold text-xl mb-2">{{$book->name}}</h1>
								<hr class="mb-2">
								<p>By: {{$book->author}}</p>
								<p>Price: {{$book->price}}</p>
								<p>Description: {{$book->description}}</p>
								<p>Genre: {{$book->genre->name}}</p>
								<p>Transaction Type: {{$book->transaction_type->name}}</p>
							</div>
							<div class="px-6 py-4 flex justify-center">

								<form action="" method="POST">
										@csrf
										<button class="inline-block bg-green-500 rounded px-3 py-2 mt-2 text-sm font-semibold text-white-700 mr-2 hover:bg-green-700">
											Edit
										</button>
										<button class="inline-block bg-red-500 rounded px-3 py-2 mt-2 text-sm font-semibold text-white-700 mr-2 hover:bg-yellow-700" onclick="" type="submit">
											Delete
										</button>
								</form>
				  			</div>
						</div>
					</div>
					@endforeach
				</div>
			</div>		
		</div>
	</div>

@endsection