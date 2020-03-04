@extends('layouts.app')
@section('content')
	<section class="mt-4" style="height: 70px;">
		
		<div class="col-lg-10 offset-lg-1">
			
			<div class="max-w-sm w-full lg:max-w-full lg:flex" style="height: 30rem;">
			   <img src="{{asset($book->imgPath)}}" class=" w-1/2 h-full flex-none bg-cover object-cover rounded-l text-center overflow-hidden" alt="Picture of the Book">

			  <div class="border-r border-b border-l border-gray-400 lg:border-l-0 lg:border-t lg:border-gray-400 bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal flex">
			  	<div class="flex flex-column">

				    <div class="row mx-4">
					     <img class="w-10 h-10 rounded-full" src="{{URL::asset('/images/book6.jpg')}}" alt="Avatar">
					     <div class="text-sm px-4">
					        <p class="text-gray-900 leading-none">User name Here</p>
								<div class="flex mt-2">
									<a href="#" id="sendMessage" class="bg-red-500 rounded px-3 py-1 mr-2  hover:no-underline hover:bg-red-700 text-white">Send a Message</a>
									<a href="#" id="showPhone" class="bg-blue-500 rounded px-3 py-1  hover:no-underline hover:bg-blue-700 text-white">Show Phone Number</a>
								</div>
					      </div>
				    </div>
				    	<hr class="mt-4"> 
				    <div class="m-4">
					    <div class="text-red-600 font-bold text-3xl">{{$book->name}}</div>
						    <p class="text-lg">By: <span>{{$book->author}}</span></p>
							<p class="text-lg">Price: <span>{{$book->price}}</span></p>
							<p class="text-lg">Description: <span>{{$book->description}}</span></p>
							<p class="text-lg">Genre: <span>{{$book->genre->name}}</span></p>
							<p class="text-lg">Transaction Type: <span>{{$book->transaction_type->name}}</span></p>
						</div>
						<div class="flex justify-center">
							<a href="/buy/{{$book->id}}" class="bg-green-500 font-semibold hover:bg-green-700 hover:text-white text-center py-2  px-4 mx-2 w-1/6 rounded hover:no-underline">Buy</a>
						</div>
					</div>
				</div>
			    
			</div>
								
		</div>
		
	</section>
	{{-- Message Button --}}
	<div class="bg-modal">
		<div class="modal-content">
			<div class="close">+</div>
			<form class="messageForm" id="messageForm">
				<div class="form-group pt-5 px-5">

					<label class="text-gray-700">Message:</label>
					<textarea class="form-control resize-none" style="height: 120px;"></textarea>
				</div>
				<div class="px-6 flex justify-center">
					<button type="submit" class="text-center bg-blue-500 hover:bg-blue-700 hover:text-white py-1 px-4 rounded">Send</button>
			  	</div>
			</form>
			<div class="flex justify-center content-center">
				<h1 class="text-3xl" id="phoneNumber">09505080405</h1>

			</div>
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


{{-- Send Message and show phone button --}}
	<script type="text/javascript">

		document.getElementById('sendMessage').addEventListener("click", function() {
			document.querySelector('.bg-modal').style.display = "flex";
			$('#phoneNumber').hide();
			$('.messageForm').show();
		});

		document.querySelector('.close').addEventListener("click", function() {
			document.querySelector('.bg-modal').style.display = "none";
		});

		document.getElementById('showPhone').addEventListener("click", function() {
			document.querySelector('.bg-modal').style.display = "flex";
			$('#phoneNumber').show();
			$('.messageForm').hide();
		});

		document.querySelector('#messageForm').addEventListener('submit', e => {
			e.preventDefault();
			console.log("hello");
		})
	</script>
@endsection
