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
                    List Your Rooms
                    @if ($errors->any())
                        <div class="my-4">
                            <div class="font-medium text-red-600">
                                {{ __('Whoops! Something went wrong.') }}
                            </div>
                            <ul class="mt-3 list-disc list-inside text-sm text-red-600">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if (session()->has('message'))
                        <div class="w-full bg-green-500 p-5 rounded my-8">
                            <span class="text-white">
                                {{session()->get('message')}}
                            </span>
                        </div>
                    @endif
                </div>
            </div>

            <div class="w-3/5 rounded-lg shadow-sm mx-auto bg-white my-4 py-4 px-4">
                <form enctype="multipart/form-data" action="{{ route('createRooms') }}" method="POST">
                    @csrf
                    <label for="Room Name" class='mt-4 block font-medium text-sm text-gray-700'>
                        Name Your Room
                    </label>
                    <input id="room_name" type="text" name="room_name" required autofocus
                    class='block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50'
                    value="{{old('room_name')}}"
                    >

                    <label for="Room Type" class='mt-4 block font-medium text-sm text-gray-700'>
                        Room Type
                    </label>
                    <input id="room_type" type="text" name="room_type" required autofocus
                    class='block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50'
                    value="{{old('room_type')}}"
                    >

                    <label for="room_img" class='mt-4 block font-medium text-sm text-gray-700'>
                        Choose Your Image
                    </label>
                    <input id="room_img" type="file" name="room_img" required autofocus
                    class='block mt-1 w-full shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50'
                    >
                    
                    <label for="total_occupancy" class='mt-4 block font-medium text-sm text-gray-700'>
                        Total Occupancy (Peoples)
                    </label>
                    <select id="total_occupancy" name="total_occupancy" required autofocus class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        
                    </select>

                    <label for="total_bedrooms" class='mt-4 block font-medium text-sm text-gray-700'>
                        Total Bedrooms
                    </label>
                    <select id="total_bedrooms" name="total_bedrooms" required autofocus class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>

                    
                    <label for="total_bathrooms" class='mt-4 block font-medium text-sm text-gray-700'>
                        Total Bathrooms
                    </label>
                    <select id="total_bathrooms" name="total_bathrooms" required autofocus class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>

                    <label for="room_summary" class='mt-4 block font-medium text-sm text-gray-700'>
                        Summary
                    </label>
                    <textarea id="room_summary" name="room_summary" required autofocus class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        
                    </textarea>
                    <label for="room_description" class='mt-4 block font-medium text-sm text-gray-700'>
                        Description
                    </label>
                    <textarea id="room_description" name="room_description" required autofocus class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        
                    </textarea>

                    <label for="address" class='mt-4 block font-medium text-sm text-gray-700'>
                        Address
                    </label>
                    <textarea id="address" name="address" required autofocus class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        
                    </textarea>

                    <div class="flex justify-between">
                        <div class="w-4/5">
                            <label for="has_tv" class='mt-4 block font-medium text-sm text-gray-700'>
                                Has Tv
                            </label>
                            <select id="has_tv" name="has_tv" required autofocus class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                <option value="1">Yes</option>
                                <option value="2">No</option>
                            </select>
                        </div>
                        <div class="w-4/5">
                            <label for="has_kitchen" class='mt-4 block font-medium text-sm text-gray-700'>
                                Has Kitchen
                            </label>
                            <select id="has_kitchen" name="has_kitchen" required autofocus class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                <option value="1">Yes</option>
                                <option value="2">No</option>
                            </select>
                        </div>
                    </div>

                    <div class="flex justify-between">
                        <div class="w-4/5">
                            <label for="has_aircondition" class='mt-4 block font-medium text-sm text-gray-700'>
                                Air Condition
                            </label>
                            <select id="has_aircondition" name="has_aircondition" required autofocus class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                <option value="1">Yes</option>
                                <option value="2">No</option>
                            </select>
                        </div>
                        <div class="w-4/5">
                            <label for="has_heating" class='mt-4 block font-medium text-sm text-gray-700'>
                                Has Heating
                            </label>
                            <select id="has_heating" name="has_heating" required autofocus class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                <option value="1">Yes</option>
                                <option value="2">No</option>
                            </select>
                        </div>
                    </div>

                    <label for="has_internet" class='mt-4 block font-medium text-sm text-gray-700'>
                        Has Internet
                    </label>
                    <select id="has_internet" name="has_internet" required autofocus class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        <option value="1">Yes</option>
                        <option value="2">No</option>
                    </select>

                    <label for="price" class='mt-4 block font-medium text-sm text-gray-700'>
                        Price/Month
                    </label>
                    <input type="number" name="price" min="5000" max="100000.00" step="1000" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" />

                    <button type="submit" class="bg-gray-800 px-2 py-2 my-4 rounded-lg text-white">
                        List
                    </button>

                </form>
            </div>

        </div>

    </div>
  
    

</x-app-layout>
