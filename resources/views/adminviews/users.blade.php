@extends('layouts.app')
@section('content')

<h1 class="text-center py-5">All Users</h1>

<div class="col-lg-10 offset-lg-1">
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Name:</th>
				<th>Email Address:</th>
				<th>Role:</th>
				<th>Address:</th>
				<th>Phone:</th>
				<th>Action:</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			@foreach($users as $user)
			<tr>
				<th>{{$user->name}}</th>
				<th>{{$user->email}}</th>
				<th>{{$user->role->name}}</th>
				<th>
					@if($user->role_id == 1)
					<a href="/changerole/{{$user->id}}" class="btn btn-info">Demote</a>
					@else
					<a href="/changerole/{{$user->id}}" class="btn btn-success">Promote</a>
					@endif
					@if(in_array($user->role_id ==1))
					@else
						<form action="/deleteuser/{{$user->id}}" method="POST">
							@csrf
							@method('DELETE')
							<button class="btn btn-danger" type="submit">Delete</button>
						</form>
					@endif

				</th>
				<th><a href="/ban/{{$user->id}}" class="btn btn-secondary">Ban</a></th>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>

@endsection