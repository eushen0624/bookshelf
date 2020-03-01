@extends('layouts.app')
@section('content')
	<section class="mt-4">
		
		<div class="px-5">
			<h1>NAME OF THE BOOK HERE</h1>
		</div>
		<div class="max-w-sm w-full lg:max-w-full lg:flex px-5 ">
			<div class="w-1/2 float-left">
				<img src="{{URL::asset('/images/book1.jpg')}}" class="h-90 flex-none bg-cover rounded-t  text-center overflow-hidden">
			</div>
			<div class="w-1/2 float-right flex flex-column">
				<div class="flex px-5">
				    <img class="w-10 h-10 rounded-full mr-4" src="{{URL::asset('/images/book6.jpg')}}" alt="User Avatar">
				    <div class="text-sm ">
			        	<p class="text-gray-900 leading-none">User name Here</p>
			        	<div class="flex">
			        		<a href="#" class="bg-red-500 rounded px-3 py-1 hover:no-underline hover:bg-red-700 text-white">Chat</a>
							<a href="#" class="bg-blue-500 rounded px-3 py-1 hover:no-underline hover:bg-blue-700 text-white">Show Phone</a>
			        	</div>
			     	</div>
			    </div>
			    <div class="px-6 py-4">
					  	<h4>Price</h4>
						<p>Transaction Type</p>
						<p>Details here</p>
						<form action="" method="POST">
							@csrf
							<button class="" type="submit">Swap</button>
						</form>
				</div>
				
			</div>
		</div>
	</section>
@endsection