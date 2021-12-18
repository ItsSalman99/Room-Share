<?php

namespace Database\Seeders;

use App\Models\Room;
use Illuminate\Database\Seeder;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Room::create([
            'room_name' => '2 Rooms',
            'home_type' => 'first_floor',
            'img' => 'storage/rooms/gulshan-room',
            'summary' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam neque praesentium itaque, veritatis in hic ullam!',
            'total_occupancy' => 16,
            'total_bedrooms' => 2,
            'total_bathrooms' => 2,
            'address' => 'Gulshan e Iqbal',
            'has_tv' => true,
            'has_kitchen' => true,
            'has_air_con' => true,
            'has_heating' => false,
            'has_internet' => true,
            'price' => '20000',
        ]);

        Room::create([
            'room_name' => '4 Rooms',
            'home_type' => 'whole_house',
            'img' => 'storage/rooms/malircity-room',
            'summary' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam neque praesentium itaque, veritatis in hic ullam!',
            'total_occupancy' => 10,
            'total_bedrooms' => 3,
            'total_bathrooms' => 2,
            'address' => 'Malir City',
            'has_tv' => true,
            'has_kitchen' => true,
            'has_air_con' => false,
            'has_heating' => false,
            'has_internet' => true,
            'price' => '60000',
        ]);

        Room::create([
            'room_name' => '2 Rooms',
            'home_type' => '3rd_floor',
            'img' => 'storage/rooms/nazimabad-room',
            'summary' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam neque praesentium itaque, veritatis in hic ullam!',
            'total_occupancy' => 3,
            'total_bedrooms' => 2,
            'total_bathrooms' => 1,
            'address' => 'Nazimabad 4 no.',
            'has_tv' => true,
            'has_kitchen' => true,
            'has_air_con' => false,
            'has_heating' => false,
            'has_internet' => false,
            'price' => '18000',
        ]);

        Room::create([
            'room_name' => '4 Rooms',
            'home_type' => 'whole_floor',
            'img' => 'storage/rooms/dha-room',
            'summary' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam neque praesentium itaque, veritatis in hic ullam!',
            'total_occupancy' => 14,
            'total_bedrooms' => 2,
            'total_bathrooms' => 2,
            'address' => 'Defense, DHA Phase 6.',
            'has_tv' => true,
            'has_kitchen' => true,
            'has_air_con' => true,
            'has_heating' => false,
            'has_internet' => true,
            'price' => '60000',
        ]);

        Room::create([
            'room_name' => '2 Rooms',
            'home_type' => 'first_floor',
            'img' => 'storage/rooms/korangi-room',
            'summary' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam neque praesentium itaque, veritatis in hic ullam!',
            'total_occupancy' => 3,
            'total_bedrooms' => 1,
            'total_bathrooms' => 1,
            'address' => 'Korangi 4 no.',
            'has_tv' => true,
            'has_kitchen' => true,
            'has_air_con' => true,
            'has_heating' => false,
            'has_internet' => true,
            'price' => '15000',
        ]);

        Room::create([
            'room_name' => '1 Room',
            'home_type' => '4rth_floor',
            'img' => 'storage/rooms/shahfaisal-room',
            'summary' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam neque praesentium itaque, veritatis in hic ullam!',
            'total_occupancy' => 1,
            'total_bedrooms' => 1,
            'total_bathrooms' => 1,
            'address' => 'Shah Faisal',
            'has_tv' => true,
            'has_kitchen' => true,
            'has_air_con' => false,
            'has_heating' => false,
            'has_internet' => false,
            'price' => '10000',
        ]);

        Room::create([
            'room_name' => '4 Rooms',
            'home_type' => '5th_floor',
            'img' => 'storage/rooms/clifton-room',
            'summary' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam neque praesentium itaque, veritatis in hic ullam!',
            'total_occupancy' => 15,
            'total_bedrooms' => 2,
            'total_bathrooms' => 2,
            'address' => 'Clifton Karachi.',
            'has_tv' => true,
            'has_kitchen' => true,
            'has_air_con' => true,
            'has_heating' => true,
            'has_internet' => false,
            'price' => '30000',
        ]);

        Room::create([
            'room_name' => '4 Rooms Flat',
            'home_type' => 'first_floor',
            'img' => 'storage/rooms/bostan-room',
            'summary' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam neque praesentium itaque, veritatis in hic ullam!',
            'total_occupancy' => 11,
            'total_bedrooms' => 2,
            'total_bathrooms' => 2,
            'address' => 'Bostan Garden Karachi',
            'has_tv' => true,
            'has_kitchen' => true,
            'has_air_con' => true,
            'has_heating' => true,
            'has_internet' => false,
            'price' => '30000',
        ]);

        Room::create([
            'room_name' => '4 Rooms Flat',
            'home_type' => 'first_floor',
            'img' => 'storage/rooms/falaknaz-room',
            'summary' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam neque praesentium itaque, veritatis in hic ullam!',
            'total_occupancy' => 10,
            'total_bedrooms' => 2,
            'total_bathrooms' => 2,
            'address' => 'Falaknaz Dynasty',
            'has_tv' => true,
            'has_kitchen' => true,
            'has_air_con' => true,
            'has_heating' => false,
            'has_internet' => false,
            'price' => '40000',
        ]);
        
        Room::create([
            'room_name' => '2 Rooms Flat',
            'home_type' => 'shared_room',
            'img' => 'storage/rooms/tntappartments-room',
            'summary' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam neque praesentium itaque, veritatis in hic ullam!',
            'total_occupancy' => 2,
            'total_bedrooms' => 2,
            'total_bathrooms' => 2,
            'address' => 'TNT Appartments.',
            'has_tv' => true,
            'has_kitchen' => true,
            'has_air_con' => false,
            'has_heating' => false,
            'has_internet' => false,
            'price' => '20000',
        ]);
    }
}
