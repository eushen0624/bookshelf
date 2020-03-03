@extends('layouts.app')
@section('content')

<h1 class="text-center py-5">Edit Book</h1>

<div class="col-lg-4 offset-lg-4">
	<form action="/editbook/{{$book->id}}" method="POST" enctype="multipart/form-data">
		@csrf
		@method('PATCH')
		<div class="form-group">
					<label for="name">
						Name: 
					</label>
					<input type="text" name="name" class="form-control" value="{{$book->name}}">
				</div>
				<div class="form-group">
					<label for="author">
						Author: 
					</label>
					<input type="text" name="author" class="form-control" value="{{$book->author}}">
				</div>
				<div class="form-group">
					<label for="price">
						Price:
					</label>
					<input type="number" name="price" class="form-control" value="{{$book->price}}">
				</div>
				<div class="form-group">
					<label for="description">
						Description:
					</label>
					<textarea name="description" class="form-control resize-none scrolling-auto">{{$book->description}}</textarea>
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
					<select name="genre_id" class="form-control" placeholder="{{$book->genre->name}}">
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
					<select name="transaction_type_id" class="form-control" value="{{$book->transaction_type->name}}">
						@foreach($transaction_types as $transaction_type)
							<option value="{{$transaction_type->id}}">
								{{$transaction_type->name}}
							</option>
						@endforeach
					</select>
				</div>
				<button class="btn btn-warning" type="submit">
					Save Changes
				</button>
	</form>
</div>
@endsection