@extends('layouts.guest')

@section('content')
<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 text-alig">
    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
        <div>
            <a href="/">
                <img src="/assets/imgs/logo.png" class="w-24 mx-auto h-24 fill-current text-gray-500" />
            </a>
        </div>
        <!-- Session Status -->
        @if (session('status'))
            <div class='font-medium text-sm text-green-600'>
                {{ $status }}
            </div>
        @endif

        <!-- Validation Errors -->
        @if ($errors->any())
            <div class="my-4">
                <div class="font-medium text-red-600">
                    {{ __('Whoops! Something went wrong.') }}
                </div>

                <ul class="mt-3 list-disc list-inside text-sm text-red-600 bg-gray-100 p-2 rounded">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <label for="email" class='block font-medium text-sm text-gray-700'>
                    Email
                </label>
                <input id="email" type="email" name="email" required autofocus
                class='block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50'
                value="{{old('email')}}"
                >
            </div>

            <!-- Password -->
            <div class="mt-4">
                <label for="password" class='block font-medium text-sm text-gray-700'>
                    Password
                </label>

                <input id="password" type="password" name="password" required autofocus
                class='block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50'>
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <button type="submit" class='inline-flex ml-4 items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150'>
                    {{ __('Log In') }}
                </button>
            </div>
        </form>
    </div>

    <div class="w-1/5 mx-auto my-8 text-center ">
        <span class="text-sm">
            Don't have an account? <a href="/register" class="text-blue-800">Register Now</a>
        </span>
    </div>

</div>

@endsection
