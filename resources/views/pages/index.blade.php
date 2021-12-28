@extends('layouts.guest')

@section('content')
<div class="w-full h-screen py-4">
  <div class="back w-11/12 mx-auto">
     <!-- Swiper -->

    <div
    style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff"
    class="swiper h-screen rounded-xl mySwiper"
  >
    <div
      class="parallax-bg py-12"
      style="
        background-image: url(assets/imgs/back3.jpg);
      "
      data-swiper-parallax="-23%"
    ></div>
    <div class="swiper-wrapper">
      <div class="swiper-slide text-center">
        <div class="title mt-44" data-swiper-parallax="-300">
          <h1 class="text-6xl font-bold">Not sure What to do? Perfect</h1>
        </div>
        <div class="subtitle py-4" data-swiper-parallax="-200">
        </div>
        <div class="text mx-auto" data-swiper-parallax="-100">
          <a href="/rooms" class="bg-white text-gray-800 font-bold text-lg border-2 border-white px-4 py-2 my-4 rounded-3xl">
            Find Rooms
          </a>
        </div>
      </div>
      <div class="swiper-slide text-center">
        <div class="title mt-44" data-swiper-parallax="-300">
          <h1 class="text-6xl font-bold">You want to become a host? Perfect</h1>
        </div>
        <div class="subtitle py-4" data-swiper-parallax="-200">
        </div>
        <div class="text mx-auto" data-swiper-parallax="-100">
          <a href="/rooms" class="bg-white text-gray-800 font-bold text-lg border-2 border-white px-4 py-2 my-4 rounded-3xl">
            Register as a host
          </a>
        </div>
      </div>
      <div class="swiper-slide text-center">
        <div class="title mt-44" data-swiper-parallax="-300">
          <h1 class="text-6xl font-bold">Looking for a help</h1>
        </div>
        <div class="subtitle py-4" data-swiper-parallax="-200">
        </div>
        <div class="text mx-auto" data-swiper-parallax="-100">
          <a href="/rooms" class="bg-white text-gray-800 font-bold text-lg border-2 border-white px-4 py-2 my-4 rounded-3xl">
            Help
          </a>
        </div>
      </div>
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div>
  </div>
  </div>
</div>

  <div class="w-9/12 mx-auto p-4 my-14">
    <h1 class="text-xl font-bold my-2">Search by city name</h1>
    <form action="{{ route('searchroom') }}" method="GET">
      <div class="flex justify-between">
        <input type="text" name="city" id="search" class="w-11/12 hover:ring-2 border-1 rounded-xl" placeholder="Search rooms ..">
        <button type="submit" class="bg-gray-800 p-4 rounded-xl text-white font-bold">
          Find
        </button>
      </div>
    </form>
  </div>

  <div>
  <div class="bg-white py-4">
    <div class="max-w-2xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
      <h2 class="text-2xl font-extrabold tracking-tight text-gray-900">Accomodations you may like!</h2>
  
      <div class="mt-6 grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-3 xl:gap-x-8">
        @foreach($rooms as $items)
        <div class="group relative">
          <div class="w-full min-h-80 bg-gray-200 aspect-w-1 aspect-h-1 rounded-md overflow-hidden group-hover:opacity-75 lg:h-80 lg:aspect-none">
            <img src="{{asset('storage/rooms/'.$items->img)}}" class="w-full h-full object-center object-cover lg:w-full lg:h-full">
          </div>
          <div class="mt-4 flex justify-between">
            <div>
              <h3 class="text-sm text-gray-700">
                <a href="{{ route('singleroom', $items->id) }}" class="font-extrabold">
                  <span aria-hidden="true" class="absolute inset-0"></span>
                  {{$items->room_name}}
                </a>
              </h3>
            </div>
            <p class="text-sm font-medium text-gray-900">Pkr. {{$items->price}}</p>
          </div>
        </div>
        @endforeach
        <!-- More products... -->
      </div>
    </div>
    <div class="w-10/12 mx-auto text-center">
      <a href="/rooms" class="rounded shadow p-2 bg-blue-900 text-white font-extrabold">
        Show More
      </a>
    </div>
  </div>
@endsection