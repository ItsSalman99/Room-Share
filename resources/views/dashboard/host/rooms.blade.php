<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Your Rooms') }}<span class="text-sm bg-green-200 font-bold px-2 rounded-lg">(You can perform crud operations on your rooms)</span>
        </h2>
    </x-slot>

    <!-- This example requires Tailwind CSS v2.0+ -->
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-8">

        <button class=" bg-gray-800 text-white rounded shadow-sm my-4 px-4 py-2">
              <a href="{{ route('addrooms') }}" class="flex justify-between">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z" clip-rule="evenodd" />
                </svg>
                <span class="text-sm ml-2">Add New</span>
              </a>
            </button>
    
    
            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                  <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                      <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                          <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                              Room
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Total Bedrooms
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Total Bathrooms
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                              Address
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                              Price
                            </th>
                            <th scope="col" class="relative px-6 py-3">
                              <span class="sr-only">Edit</span>
                            </th>
                            <th scope="col" class="relative px-6 py-3">
                              <span class="sr-only">Delete</span>
                            </th>
                          </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($rooms as $item)
                          <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                              <div class="flex items-center">
                                <div class="flex-shrink-0 h-16 w-16">
                                  <img class="h-16 w-16 rounded-full" src="{{ asset('storage/rooms/'.$item->img) }}" alt="">
                                </div>
                                <div class="ml-4">
                                  <div class="text-sm font-medium text-gray-900">
                                    {{$item->room_name}}
                                  </div>
                                  <div class="text-sm text-gray-500">
                                    {{$item->home_type}}
                                  </div>
                                </div>
                              </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                              <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                {{$item->total_bedrooms}}
                              </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                  {{$item->total_bathrooms}}
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                  {{$item->address}}
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                              <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                {{$item->price}} PKR
                              </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <a href="{{ route('editroom', $item->id) }}" type="submit" class="flex justify-center text-white hover:text-gray-200 rounded bg-red-800 px-2 py-2">
                                  <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                  </svg>
                                </a>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                              <form action="{{ route('delroom', $item->id) }}" method="post">
                                @csrf
                                <button type="submit" class="flex justify-center text-white hover:text-gray-200 rounded bg-red-800 px-2 py-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>
                                </button>
                              </form>  
                            </td>
                          </tr>
                          @endforeach
              
                          <!-- More people... -->
                        </tbody>
                      </table>
                    </div>
                    
                    <div class="py-4">
                      {{$rooms->links()}}
                    </div>
                  </div>
                </div>
              </div>        
        </div>

</x-app-layout>