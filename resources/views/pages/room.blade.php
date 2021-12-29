@extends('layouts.guest')

@section('content')
<div class="bg-gray-50 w-full">
    <div class="py-12"></div>
    <div class="bg-white w-11/12 mx-auto py-8 rounded-lg shadow-md">
        <div class="grid grid-cols-2 gap-8 px-8">
            <div>
                <img src="{{asset('storage/rooms/'.$room->img)}}" class="rounded-xl">
            </div>
            <div>
                <h1 class="text-4xl font-extrabold">{{$room->room_name}} at {{$room->city}}</h1>
                <span class="text-sm bg-gray-800 rounded-full shadow text-white px-2">Owner: {{$room->owner->name}}</span>
                <br>
                <h1 class="text-xl text-gray-600 font-bold">Pkr. {{$room->price}}/Day</h1>
                <hr><br>
                <h1 class="text-xl font-bold">Summary:</h1>
                <span>{{$room->summary}}</span>
                <br><br>
                <h1 class="text-xl font-bold">Address:</h1>
                <textarea readonly class="w-full rounded-xl">{{$room->address}}</textarea>
                <br>
                <p>Location: <b>{{$room->address}}</b></p>
                <p>Has Tv: <b>{{$room->has_tv = 1 ? 'Yes' : 'No'}}</b></p>
                <p>Has Kitchen: <b>{{$room->has_kitchen = 1 ? 'Yes' : 'No'}}</b></p>
                <p>Has Internet: <b>{{$room->has_internet = 1 ? 'Yes' : 'No'}}</b></p>
                <br>

                <span class="text-white bg-gray-800 p-2 rounded-full font-semibold">Total Bedrooms: {{$room->total_bedrooms}}</span>
                <span class="text-white bg-gray-800 p-2 rounded-full font-semibold">Total Bathrooms: {{$room->total_bathrooms}}</span>
                
            </div>
        </div>
    </div>

    <div class="py-8"></div>
    <div class="bg-white w-11/12 mx-auto py-8 rounded-lg shadow-md">
        <div class="grid grid-cols-2 gap-8 px-8">
            <div>
                <h1 class="text-4xl font-extrabold">Description</h1><br>
                <p>{{$room->description}}</p>
            </div>
            <div class="shadow-lg border-2 rounded-xl p-4">
                <span class="text-lg text-pink-700 font-extrabold">Pkr. {{$room->price}}/Day</span>
                <br><hr><br>
                <div>
                    <div class="flex justify-between">
                        <span class="underline">30 Days x Nights</span>
                        <span class="underline">Pkr. {{$room->price}}</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="underline">Monthly Cleaning Fee</span>
                        <span class="underline">Pkr. 1000</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="underline">Monthly Service Fee</span>
                        <span class="underline">Pkr. 2000</span>
                    </div>
                </div>
                <br>
                <form action="{{ route('roomReserved') }}" method="post">
                    @csrf
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
                    
                    <input type="hidden" name="roomId" value="{{$room->id}}">
                    <div class="flex justify-center">
                        
                        <div class="py-2">
                            <span class="font-bold">Check In Date</span>
                            <input required type="date" name="start_date" id="" class="rounded-lg border-2 border-gray-700 w-full">
                          </div>
                          <div class="py-2">
                            <span class="font-bold">Check Out Date</span>
                            <input required type="date" name="end_date" id="" class="rounded-lg border-2 border-gray-700 w-full">
                        </div>
                    </div>
                    <div class="py-2">
                        <span class="font-bold">Guests</span>
                        <select name="tguest" id="" class="rounded-lg border-2 border-gray-700 w-full">
                          @foreach (range(1,$room->total_occupancy) as $item)
                              <option value="{{$item}}">{{$item}}</option>
                            @endforeach
                        </select>
                      </div>
                    
                    <button type="submit" class="bg-blue-900 text-white text-lg w-full py-4 rounded-lg">
                        Reserve
                    </button>
                </form>
                @role('Admin')
                    <h1 class="text-xl text-red-700 font-bold">You are an admin.To reserve any room login as user account.</h1>
                @endrole
                @role('Host')
                    <h1 class="text-xl text-red-700 font-bold">You are an admin.To reserve any room login as user account.</h1>
                @endrole
            </div>
        </div>
    </div>
    <div class="py-8"></div>    
</div>
@endsection