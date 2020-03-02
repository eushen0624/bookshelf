@extends('layouts.app')
@section('content')
	<section class="mt-4" style="height: 70px;">
		
		<div class="col-lg-10 offset-lg-1">
			
			<div class="max-w-sm w-full lg:max-w-full lg:flex" style="height: 30rem;">
			   <img src="{{asset($book->imgPath)}}" class=" w-1/2 h-full flex-none bg-cover object-fit rounded-l text-center overflow-hidden" alt="Picture of the Book">

			  <div class="border-r border-b border-l border-gray-400 lg:border-l-0 lg:border-t lg:border-gray-400 bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
			    <div class="flex items-center">
			      <img class="w-10 h-10 rounded-full mr-4" src="{{URL::asset('/images/book6.jpg')}}" alt="Avatar">
			      <div class="text-sm">
			        <p class="text-gray-900 leading-none">User name Here</p>
						<div class="flex">
							<a href="#" id="sendMessage" class="bg-red-500 rounded px-3 py-1 mx-2 hover:no-underline hover:bg-red-700 text-white">Send a Message</a>
							<a href="#" id="showPhone" class="bg-blue-500 rounded px-3 py-1 mx-2 hover:no-underline hover:bg-blue-700 text-white">Show Phone Number</a>
						</div>
			      </div>
			    </div>
			      <div class="text-gray-900 font-bold text-xl">{{$book->name}}</div>
			     	<p>By: {{$book->author}}</p>
					<p>Price: {{$book->price}}</p>
					<p>Description: {{$book->description}}</p>
					<p>Genre: {{$book->genre->name}}</p>
					<p>Transaction Type: {{$book->transaction_type->name}}</p>
			    </div>
			</div>
								
		</div>
		
	</section>
	<div class="bg-modal">
		<div class="modal-content">
			<div class="close">+</div>
			<form>
				<div class="form-group pt-5 px-5">

					<label class="text-gray-700">Message:</label>
					<textarea class="form-control resize-none" style="height: 120px;"></textarea>
				</div>
				<div class="px-6 flex justify-center">
					<button type="submit" class="text-center bg-blue-500 hover:bg-blue-700 hover:text-white py-1 px-4 rounded">Send</button>
			  	</div>
			</form>
		</div>
	</div>

	<style type="text/css">
		.bg-modal{
			height: 100%;
			width:100%;
			background-color: rgba(0,0,0,0.7);
			position:absolute;
			top:0;
			display: flex;
			justify-content: center;
			align-items: center;
			display: none;
		}

		.modal-content{
			width:500px;
			height: 300px;
			border-radius: 4px;
			position: relative;
		}

		.close{
			position: absolute;
			top:0;
			right:14px;
			font-size: 2.5rem;
			transform: rotate(45deg);
			cursor:pointer;
		}
	</style>

	<script type="text/javascript">
		document.getElementById("sendMessage").addEventlistener('click', function(){
			document.querySelector('.bg-modal').style.display = 'flex';
		});

		document.querySelector('.close').addEventListener('click', function(){
			document.querySelector('#bg-modal').style.display = 'none';
		});
	</script>
@endsection
