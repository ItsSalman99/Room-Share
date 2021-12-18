<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <style>
        .special{
            background-color: dodgerblue;
        }
        .back{
            background-image: url('assets/imgs/back.jpg');
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>


        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body>

        
        <nav class="w-full h-full p-5 special">
            <a href="/" class="text-white font-bold">
                RoomShare.com
            </a>
    
            <div class="flex gap-2 float-right">
                    @auth
                        <a href="/dashboard" class="text-white font-extrabold">
                                {{Auth::user()->name}}   
                        </a>
                    @else
                        <a href="/login" class="text-white font-extrabold">
                            Log in
                        </a>

                        <a href="/register" class="text-white font-extrabold">
                            Register
                        </a>
                    @endauth
                    <a href="" class="text-white font-extrabold bg-gray-800 rounded p-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
                        </svg>
                    </a>
                </li>
            </div>
    
        </nav>

        <div class="font-sans text-gray-900 antialiased">

            @yield('content')

        </div>
    </body>
</html>
