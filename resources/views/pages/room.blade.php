@extends('layouts.guest')

@section('content')
<div class="bg-gray-50 w-full">
    <div class="py-12"></div>
    <div class="bg-white w-11/12 mx-auto py-8 rounded-lg shadow-md">
        <div class="grid grid-cols-2 gap-8 px-8">
            <div>
                <img src="{{asset($room->img .'.jpg')}}" class="rounded-xl">
            </div>
            <div>
                <h1 class="text-4xl font-extrabold">{{$room->room_name}} at {{$room->address}}</h1>
                <br>
                <h1 class="text-xl text-gray-600 font-bold">Pkr. {{$room->price}}/Month</h1>
                <hr><br>
                <h1 class="text-xl font-bold">Summary:</h1>
                <span>{{$room->summary}}</span>
                <br><br>
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
                <span class="text-lg text-pink-700 font-extrabold">Pkr. {{$room->price}}/Month</span>
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
                    <input type="hidden" name="roomId" value="{{$room->id}}">
                    
                    <button type="submit" class="bg-blue-900 text-white text-lg w-full py-4 rounded-lg">
                        Reserve
                    </button>
                </form>
            </div>
        </div>
    </div>
    <div class="py-8"></div>    
</div>
@endsection