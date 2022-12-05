@extends('layouts.app')

@section('content')

<section class="h-screen">
    <div class="container px-6 py-12 h-full">
      <div class="flex justify-center items-center flex-wrap h-full g-6 text-gray-800">
        <div class="md:w-8/12 lg:w-6/12 mb-12 md:mb-0">
            <img
            src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
            class="w-full"
            alt="Sample image"
          />
        </div>
        <div class="md:w-8/12 lg:w-5/12 lg:ml-20">
            <div class="flex flex-col mb-5 justify-center items-center">
                <img src="img/logo2.png" width="120" height="170" alt="logo" />
                <h2 class="text-3xl">S'inscrire</h2>
            </div>
           
          <form method="POST" action="{{ route('register') }}">
            @csrf
            <!-- Email input -->
            <div class="mb-6">
              <input
                type="text"
                class="@error('name') is-invalid @enderror form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                placeholder="Name"
                name="name" value="{{ old('name') }}" required autocomplete="name" autofocus
              />

              @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
  
            <div class="mb-6">
              <input
                type="text"
                class="@error('email') is-invalid @enderror form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                placeholder="Email address"
                name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
              />

              @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
  
            <!-- Password input -->
            <div class="mb-6">
              <input
                type="password"
                class="@error('password') is-invalid @enderror form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                placeholder="Password"
                name="password" required autocomplete="current-password"
              />
              @error('password')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
                @enderror
            </div>

            <div class="mb-6">
                <input
                  type="password"
                  class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                  placeholder="Confirm password"
                  name="password_confirmation" required autocomplete="new-password"
                />
            </div>
  
            <div class="flex justify-between items-center mb-6">
                <a href="{{ route('login') }}"
                class="text-blue-600 hover:text-blue-700 focus:text-blue-700 active:text-blue-800 duration-200 transition ease-in-out"
                > {{ __('Already register? Login now') }}</a>
            </div>
  
            <!-- Submit button -->
            <button
              type="submit"
              class="inline-block px-7 py-3 bg-blue-600 text-white font-medium text-sm leading-snug uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out w-full"
              data-mdb-ripple="true"
              data-mdb-ripple-color="light"
            >
              Register
            </button>

          </form>
        </div>
      </div>
    </div>
  </section>
@endsection
