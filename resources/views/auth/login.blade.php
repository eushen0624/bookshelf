@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center mt-5">
        
        <div class="w-full max-w-xs">
          <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" method="POST" action="{{route('login')}}">
            <div class="mb-4">
              @csrf
              <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                {{ __('E-Mail Address:') }}
              </label>
              <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('email') is-invalid @enderror" id="email" type="email" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="">
              <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                {{ __('Password:') }}
              </label>
              <input class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline @error('password') is-invalid @enderror" id="password" type="password" placeholder="Password" name="password">
              @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
              @enderror
            </div>

            <div class="flex items-center justify-between">
              <button class="bg-blue-700 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                {{ __('Login') }}
              </button>
                @if (Route::has('password.request'))
                  <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                  </a>
                @endif
            </div>
          </form>
          <p class="text-center text-gray-500 text-xs">
            &copy;B55 Corp.All rights reserved.
          </p>
        </div>

</div>


@endsection
