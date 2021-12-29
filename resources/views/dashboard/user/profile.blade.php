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
        
        @foreach (Cart::content() as $room)
        <div class="py-2">
          <span class="font-bold">Check In Date</span>
          <input required type="date" name="start_date" value="{{$room->options->start_date}}" id="" class="rounded-lg border-2 border-gray-700 w-full">
        </div>
        <div class="py-2">
          <span class="font-bold">Check Out Date</span>
          <input required type="date" name="end_date" id="" value="{{$room->options->end_date}}" class="rounded-lg border-2 border-gray-700 w-full">
        </div>
        <div class="py-2">
          <span class="font-bold">Guests</span>
          <select name="tguest" id="" class="rounded-lg border-2 border-gray-700 w-full">
                <option value="{{$room->options->guest}}">{{$room->options->guest}}</option>
          </select>
        </div>
      </div>
      
      <div class=" border-2 p-4 rounded-lg">
        <div class="flex gap-4">
          <div class="w-2/5">
              <img src="{{ asset('storage/rooms/'.$room->options->img) }}" class="rounded-lg" alt="">
          </div>
          <div>
            <h1 class="text-xl">{{$room->name}} at {{$room->options->city}}</h1>
            <p class="bg-gray-800 px-4 rounded-full text-white text-sm">Owner: {{$room->options->owner}}</p>
          </div>
        </div>
        <hr class="my-4">
        <h1 class="text-xl font-bold">Price details</h1>
        <p>Pkr.{{$room->price}}</p>
      @endforeach
      </div>
    </div>
    @endif
    
    <div class="border-2 p-4 rounded-lg">
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
      <form action="{{ route('addprofile') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="py-2">
          <span class="font-bold">Your Phone#:</span>
          <input type="text" name="number" id="" class="rounded-lg border-2 border-gray-700 w-full">
        </div>
        <div class="py-2">
          <span class="font-bold">Birth Day:</span>
          <input type="date" name="bday" id="" class="rounded-lg border-2 border-gray-700 w-full">
        </div>
        <div class="py-2">
          <span class="font-bold">Address</span>
          <textarea name="address" class="rounded-lg border-2 border-gray-700 w-full"></textarea>
        </div>
        <div class="py-2">
          <span class="font-bold">Profile:</span>
          <input type="file" name="avatar" id="" class="rounded-lg border-2 border-gray-700 w-full">
        </div>
        <button type="submit" class="bg-gray-800 w-full rounded-lg shadow text-white p-4">
          Confrim & Pay
        </button>
       </form>
      </div>
  </div>

@endsection