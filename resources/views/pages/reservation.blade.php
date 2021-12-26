@extends('layouts.guest')

@section('content')

  <div class="bg-white shadow rounded-lg border-2 p-8 my-8 w-4/5 mx-auto">
    
    @if (Cart::count() == 0)
        <div>
          <h1 class="text-4xl my-4">You haven't reserve any room yet</h1>
          <a href="/rooms" class="bg-gray-800 p-2 rounded-lg shadow text-white">
            Go find some rooms
          </a>
        </div>
      @else
    <div class="flex py-4">
      <a href="{{ route('destroyReservations') }}" class="hover:bg-gray-100 rounded-full px-2">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
        </svg>
      </a>
      <h1 class="text-4xl">Confirm & pay</h1>
    </div>
    <div class="grid grid-cols-2 gap-8 py-8">
      <div>
        <h1 class="text-2xl">Your Reservation</h1>
        <div class="py-2">
          <span class="font-bold">Dates</span>
          <input type="date" name="" id="" class="rounded-lg border-2 border-gray-700 w-full">
        </div>
        <div class="py-2">
          <span class="font-bold">Guests</span>
          <select name="" id="" class="rounded-lg border-2 border-gray-700 w-full">
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
            <option value="4">Four</option>
          </select>
        </div>
      </div>
      
      <div class=" border-2 p-4 rounded-lg">
      @foreach (Cart::content() as $room)
        <div class="flex gap-4">
          <div class="w-2/5">
              <img src="{{ asset('/assets/imgs/back.jpg') }}" class="rounded-lg" alt="">
          </div>
          <div>
            <h1 class="text-xl">{{$room->name}}</h1>
            <p>{{$room->price}}</p>
          </div>
        </div>
        <hr class="my-4">
        <h1 class="text-xl font-bold">Price details</h1>
      @endforeach
      </div>
    </div>
    @endif
  </div>


@endsection