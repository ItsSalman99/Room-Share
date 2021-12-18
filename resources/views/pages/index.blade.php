@extends('layouts.guest')

@section('content')
<div class="w-full h-screen back">
  <div class="w-10/12 mx-auto py-14">
      <h1 class="text-white text-6xl font-extrabold ">Find your great stay! <br> Make your reservations.</h1>
      <br><br>
      <p class="text-white font-extrabold">
          Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum itaque sit et molestias assumenda nobis architecto? Ullam, architecto fugit similique quaerat est voluptates ipsum? Animi suscipit doloribus earum ipsa est?
      </p>
      <br><br>
      <a href="/rooms" class="rounded shadow border-4 p-2 hover:bg-blue-900 hover:border-blue-900 text-white font-extrabold">
          Find Rooms
      </a>
  </div>
</div>
    <div>
<div class="bg-white py-4">
    <div class="max-w-2xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
      <h2 class="text-2xl font-extrabold tracking-tight text-gray-900">Accomodations you may like!</h2>
  
      <div class="mt-6 grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-3 xl:gap-x-8">
        @foreach($rooms as $items)
        <div class="group relative">
          <div class="w-full min-h-80 bg-gray-200 aspect-w-1 aspect-h-1 rounded-md overflow-hidden group-hover:opacity-75 lg:h-80 lg:aspect-none">
            <img src="{{asset($items->img.'.jpg')}}" class="w-full h-full object-center object-cover lg:w-full lg:h-full">
          </div>
          <div class="mt-4 flex justify-between">
            <div>
              <h3 class="text-sm text-gray-700">
                <a href="#" class="font-extrabold">
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