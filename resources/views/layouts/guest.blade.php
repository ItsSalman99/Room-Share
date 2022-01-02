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
        <link rel="stylesheet" href="/css/app.css">

        <link rel="stylesheet" href="/css/app.css">

        {{-- Swiper --}}
        <link
        rel="stylesheet"
        href="https://unpkg.com/swiper@7/swiper-bundle.min.css"
      />
      <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <style>
      .swiper {
        width: 100%;
        background: #000;
      }

      .swiper-slide {
        font-size: 18px;
        color: #fff;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        padding: 40px 60px;
      }

      .parallax-bg {
        position: absolute;
        left: 0;
        top: 0;
        width: 130%;
        height: 100%;
        -webkit-background-size: cover;
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-position: center;
      }

      .swiper-slide .title {
        font-size: 41px;
        font-weight: 300;
      }

      .swiper-slide .subtitle {
        font-size: 21px;
      }

      .swiper-slide .text {
        font-size: 14px;
        max-width: 400px;
        line-height: 1.3;
      }
    </style>


        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body>

        
        <nav class="w-full h-full p-5 special">
            <a href="/" class="text-gray-800 font-bold border-b-2 hover:border-red-600">
                RoomShare.com
            </a>
    
            <div class="flex gap-2 float-right">
                <a href="/rooms" class="text-gray-800 font-extrabold border-b-2 hover:border-red-600">
                    Rooms
                </a>
                    @auth
                    <div class="flex justify-between">
                      <a href="/dashboard" class="text-gray-800 font-extrabold border-b-2 hover:border-red-600 px-2">
                        {{Auth::user()->name}}   
                      </a>
                      <!-- Authentication -->
                      <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <a class="text-gray-800 font-extrabold border-b-2 hover:border-red-600 px-2"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('Log Out') }}
                      </a>
                    </form>
                    @else
                        <a href="/login" class="text-gray-800 font-extrabold border-b-2 hover:border-red-600">
                            Login
                        </a>

                        <a href="/register" class="text-gray-800 font-extrabold border-b-2 hover:border-red-600">
                            Register
                        </a>
                    @endauth
                </li>
            </div>
    
        </nav>

        <div class="font-sans text-gray-900 antialiased">

            @yield('content')

        </div>

        <script>
            var swiper = new Swiper(".mySwiper", {
                speed: 600,
                parallax: true,
                autoplay: {
                    delay: 7500,
                    disableOnInteraction: false,
                },
                pagination: {
                el: ".swiper-pagination",
                clickable: true,
                },
                navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
                },
            });
          </script>
    </body>
</html>
