@extends('layout.app')
@section('content')
	<h1>Profile</h1>
	<div>
		<form action="" method="POST" enctype="multipart/data-form">
			<div>
				<img src="#">
				<input type="file" name="imgPath">
			</div>
			<div>
				<label for="name">Name:</label>
				<input type="text" name="name">
			</div>
			<div>
				<label for="email">Email:</label>
				<input type="text" name="email">
			</div>
			<div>
				<label for="password">Password:</label>
				<input type="text" name="password">
			</div>
			<div>
				<label for="confirmPassword">Confirm Password:</label>
				<input type="text" name="name">
			</div>
			<button class="" type="submit">
				Update
			</button>
		</form>
		
	</div>
@endsection