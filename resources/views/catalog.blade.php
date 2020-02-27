@extends('layouts.app')
@section('content')
	<section class="container">
		<div class="row">
			
		</div>
		<div class="col-lg-10">
				<div class="row w-100">
				@foreach($books as $book)
				<div class="col-lg-4 my-2">
					<div class="card">
						<img src="{{asset($book->imgPath)}}" height="250px">
						<div class="card-body">
							<h6 class="card-title">
								{{$book->name}}
							</h6>
							<p class="card-text">
								Price {{$book->price}}
							</p>
							<p class="card-text">
								Description: {{$book->description}}
							</p>
							
							<p class="card-text">
								Category: {{$book->category->name}}
							</p>

							@if($indiv_item->delete_at != NULL)
								<p class="text-danger">
									Out of Stock!!!
								</p>
							@endif

						@auth
						@if(Auth::user()->role_id==1)
							<div class="card-footer d-flex">
							@if($book->delete_at == NULL)
								<form action="/deleteitem/{{$book->id}}" method="POST">
								@csrf
								@method('DELETE')
								<button class="btn btn-danger" type="submit">
									Delete
								</button>
								
								</form>
						
							@else
								<form action="/restoreitem/{{$book->id}}" method="POST">
								@csrf
									<button class="btn btn-danger" type="submit">
										Restock
									</button>
								
								</form>

						
							@endif
							<a href="/edititem/{{$book->id}}" class="btn btn-info">Edit</a>
							</div>
						@else
							<div class="card-footer">
							
								<form action="/addtocart/{{$book->id}}" method="POST">
									@csrf
									<input type="number" name="quantity" class="form-control" value="1" id="quantity_{{$book->id}}">
									<button class="btn btn-primary my-2" onclick="addToCart({{$book->id}})" type="submit">
										Add to Cart
									</button>
								</form>
							</div>
						
						@endif
						@endauth
							
						
						</div>
					</div>
					
				</div>
			@endforeach
		</div>
			</div>
		
		</section>
@endsection