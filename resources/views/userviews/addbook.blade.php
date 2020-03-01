@extends('layouts.app')
@section('content')

	<h1 class="text-center py-5">Add Book to Shelf</h1>
	<div class="col-lg-6 offset-lg-3">
		<form action="/addbook" method="POST" enctype="multipart/form-data">
				@csrf
				<div class="form-group">
					<label for="name">
						Name: 
					</label>
					<input type="text" name="name" class="form-control">
				</div>
				<div class="form-group">
					<label for="author">
						Author: 
					</label>
					<input type="text" name="author" class="form-control">
				</div>
				<div class="form-group">
					<label for="price">
						Price:
					</label>
					<input type="number" name="price" class="form-control">
				</div>
				<div class="form-group">
					<label for="description">
						Description:
					</label>
					<textarea name="description" class="form-control"></textarea>
				</div>
				<div class="form-group">
					<label for="imgPath">
						Image:
					</label>
					<input type="file" name="imgPath" class="form-control">
				</div>
				<div class="form-group">
					<label for="genre_id">
						Genre:
					</label>
					<select name="genre_id" class="form-control">
						@foreach($genres as $genre)
							<option value="{{$genre->id}}">
								{{$genre->name}}
							</option>
						@endforeach
					</select>
				</div>
				<div class="form-group">
					<label for="transaction_type_id">
						Genre:
					</label>
					<select name="transaction_type_id" class="form-control">
						@foreach($transaction_types as $transaction_type)
							<option value="{{$transaction_type->id}}">
								{{$transaction_type->name}}
							</option>
						@endforeach
					</select>
				</div>
				<button class="btn btn-warning" type="submit">
					Save
				</button>
			</form>
	</div>
@endsection