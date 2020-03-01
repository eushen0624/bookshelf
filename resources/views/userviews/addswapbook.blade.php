@extends('layouts.app')
@section('content')
	<section>
		<h1>Swap Book</h1>
		<form>
			<div>
				<label for="name">Book Name:</label>
				<input name="name" type="text">
			</div>
			<div>
				<label for="author">Author:</label>
				<input name="author" type="text">
			</div>
			<div>
				<label for="genre">Genre:</label>
				<select name="genre">
					<option></option>
				</select>
			</div>
			<div>
				<label for="description">Description:</label>
				<input name="description" type="text">
			</div>
			<div>
				<label for="imgPath">Image(s):</label>
				<input name="imgPath" type="text">
			</div>
			<input type="hidden" name="transaction_type_id" value="2">
			<button class="" type="submit">
				Send
			</button>	
			
		</form>
	</section>
	
@endsection