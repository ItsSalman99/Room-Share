@extends('layouts.guest')

@section('content')
    <div>
<div class="bg-white">
    <div class="max-w-2xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
      <h2 class="text-2xl font-extrabold tracking-tight text-gray-900">Accomodations</h2>
  
      <div class="mt-6 grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-3 xl:gap-x-8">
        @foreach($rooms as $items)
        <div class="group relative">
          <div class="w-full min-h-80 bg-gray-200 aspect-w-1 aspect-h-1 rounded-md overflow-hidden group-hover:opacity-75 lg:h-80 lg:aspect-none">
            <img src="{{asset('storage/rooms/'.$items->img)}}" class="w-full h-full object-center object-cover lg:w-full lg:h-full">
          </div>
          <div class="mt-4 flex justify-between">
            <div>
              <h3 class="text-sm text-gray-700">
                <a href="{{ route('singleroom',$items->id) }}">
                  <span aria-hidden="true" class="absolute inset-0"></span>
                  {{$items->room_name}}
                </a>
              </h3>
              <br>
              {{-- <a class="mt-2 text-sm text-white special p-2 rounded-lg">Let's see</a> --}}
            </div>
            <p class="text-sm font-medium text-gray-900">Pkr.{{$items->price}}</p>
          </div>
        </div>
        @endforeach
        <!-- More products... -->
      </div>
      
      {{$rooms->links()}}
    </div>
  </div>
  
    </div>
@endsection