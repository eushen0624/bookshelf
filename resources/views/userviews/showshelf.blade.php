@extends('layouts.app')
@section('content')

	<section>
		{{-- IN SHELF --}}
	<div>
		<div>
			<h3>IN SHELF</h3>
			<form>
				<button>Empty Shelf</button>
			</form>
		</div>
		
		<hr>
		<div class="flex flex-row">
			<div class="max-w-sm rounded overflow-hidden shadow-lg my-5 mx-2">
				<img src="#" class="w-full">
				<div class="px-6 pt-4">
					<h5>Book Name here</h5>
					<p>Price</p>
					<p>Description here</p>
					<p>Transaction Type Here</p>
					<p>Status here</p>

					<div>
						<form action="" methor="POST">
							@csrf
							<button>
								<button class="inline-block bg-blue-500 rounded px-3 py-2 mt-2 text-sm font-semibold text-white-700 mr-2 hover:bg-blue-700">
									Edit
								</button>
								<button class="inline-block bg-red-500 rounded px-3 py-2 mt-2 text-sm font-semibold text-white-700 mr-2 hover:bg-red-700" onclick="" type="submit">
									Delete
								</button>
							</button>		
						</form>
					</div>
				</div>
			</div>
		</div>

	</div>

		{{-- OUT SHELF --}}
	<div>
		<div>
			<h3>OUT SHELF</h3>

		</div>
		<hr>
		
		<div class="flex flex-row">
			<div class="max-w-sm rounded overflow-hidden shadow-lg my-5 mx-2">
				<img src="#" class="w-full">
				<div class="px-6 pt-4">
					<h5>Book Name here</h5>
					<p>Price</p>
					<p>Description here</p>
					<p>Transaction Type Here</p>
					<p>Status here</p>
					<p>Return Date</p>
					
				</div>
			</div>
		</div>
		
	</div>
	</section>
@endsection