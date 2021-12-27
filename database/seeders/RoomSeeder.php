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
            'img' => 'gulshan-room.jpg',
            'summary' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam neque praesentium itaque, veritatis in hic ullam!',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure quam provident, maxime eos, doloremque odit, perferendis et distinctio facere qui commodi laborum. Dolor officia cum voluptas corporis nobis doloremque maxime!',
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
            'owner_id' => 2,
        ]);

        Room::create([
            'room_name' => '4 Rooms',
            'home_type' => 'whole_house',
            'img' => 'malircity-room.jpg',
            'summary' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam neque praesentium itaque, veritatis in hic ullam!',
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla nemo ea in magni, magnam voluptatum ipsum nobis velit delectus obcaecati voluptate repellendus dolor! Quaerat, architecto recusandae itaque delectus iure iste!',
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
            'owner_id' => 3
        ]);

        Room::create([
            'room_name' => '2 Rooms',
            'home_type' => '3rd_floor',
            'img' => 'nazimabad-room.jpg',
            'summary' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam neque praesentium itaque, veritatis in hic ullam!',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur, cum. Vero accusantium dolore harum blanditiis debitis atque voluptatum voluptas, accusamus aliquam itaque amet? Aperiam, quia reprehenderit a error iste quis.',
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
            'owner_id' => 2,
        ]);

        Room::create([
            'room_name' => '4 Rooms',
            'home_type' => 'whole_floor',
            'img' => 'dha-room.jpg',
            'summary' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam neque praesentium itaque, veritatis in hic ullam!',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi voluptatem in molestias. Nemo dignissimos iusto necessitatibus labore alias nesciunt minus accusamus, magnam expedita maiores. Earum ut soluta modi quidem molestiae?',
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
            'owner_id' => 2,
        ]);

        Room::create([
            'room_name' => '2 Rooms',
            'home_type' => 'first_floor',
            'img' => 'korangi-room.jpg',
            'summary' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam neque praesentium itaque, veritatis in hic ullam!',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam nihil laborum dolore ut itaque nam laboriosam numquam aut quas veritatis, veniam molestiae rem. Dolores nisi doloremque molestiae unde officia eum!',
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
            'owner_id' => 3,
        ]);

        Room::create([
            'room_name' => '1 Room',
            'home_type' => '4rth_floor',
            'img' => 'shahfaisal-room.jpg',
            'summary' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam neque praesentium itaque, veritatis in hic ullam!',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis, cumque? Excepturi quaerat ipsa vel, itaque corrupti voluptate adipisci nihil dolor iure, deserunt debitis? Voluptate eos suscipit a laborum voluptatibus. Molestiae.',
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
            'owner_id' => 2,
        ]);

        Room::create([
            'room_name' => '4 Rooms',
            'home_type' => '5th_floor',
            'img' => 'clifton-room.jpg',
            'summary' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam neque praesentium itaque, veritatis in hic ullam!',
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nostrum, ipsum, corporis ducimus nihil officiis quasi voluptate, ab id minus placeat exercitationem officia. Alias ullam eveniet cum sit nemo. Esse, maxime.',
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
            'owner_id' => 3,
        ]);

        Room::create([
            'room_name' => '4 Rooms Flat',
            'home_type' => 'first_floor',
            'img' => 'bostan-room.jpg',
            'summary' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam neque praesentium itaque, veritatis in hic ullam!',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex, accusamus similique! Fugiat nam doloremque facilis tenetur non autem laudantium enim sit mollitia magnam totam, ratione odio ipsam iusto nulla illum?',
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
            'owner_id' => 2,
        ]);

        Room::create([
            'room_name' => '4 Rooms Flat',
            'home_type' => 'first_floor',
            'img' => 'falaknaz-room.jpg',
            'summary' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam neque praesentium itaque, veritatis in hic ullam!',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit expedita aliquam corporis atque omnis nemo velit, repellendus illo maiores et ducimus praesentium eaque, debitis non corrupti excepturi asperiores adipisci? Eveniet.',
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
            'owner_id' => 3,
        ]);
        
        Room::create([
            'room_name' => '2 Rooms Flat',
            'home_type' => 'shared_room',
            'img' => 'tntappartments-room.jpg',
            'summary' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam neque praesentium itaque, veritatis in hic ullam!',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis provident nobis rem natus, repellat magnam inventore adipisci cupiditate! Praesentium deserunt saepe tempore nam delectus laborum dolorem earum doloremque dolorum molestias.',
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
            'owner_id' => 2,
        ]);
    }
}
