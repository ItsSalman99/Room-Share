<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Welcom Dear, <span class="px-2 py-2">{{Auth::user()->name}} <sup class="bg-gray-800 px-2 rounded-full text-white"> {{Auth::user()->roles->first()->display_name}} </sup></span>
                </div>
            </div>
        </div>

        <div class="max-w-6xl mx-auto">
            <div class="flex justify-between my-8">
                <div class="bg-white p-12 rounded-lg shadow-lg">
                    <h1 class="text-xl font-bold">Total Users</h1>
                    <h2 class="text-center text-lg font-bold bg-gray-800 rounded-full text-white">
                        {{$TotalUsers}}
                    </h2>
                </div>
                <div class="bg-white p-12 rounded-lg shadow-lg">
                    <h1 class="text-xl font-bold">Total Rooms</h1>
                    <h2 class="text-center text-lg font-bold bg-gray-800 rounded-full text-white">
                        {{$TotalRooms}}
                    </h2>
                </div>
                <div class="bg-white p-12 rounded-lg shadow-lg">
                    <h1 class="text-xl font-bold">Total Reservations</h1>
                    <h2 class="text-center text-lg font-bold bg-gray-800 rounded-full text-white">
                        {{$TotalReservations}}
                    </h2>
                </div>
            </div>
        </div>

    </div>
  
    

</x-app-layout>
