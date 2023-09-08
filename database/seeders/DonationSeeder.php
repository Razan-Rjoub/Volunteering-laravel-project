<?php

namespace Database\Seeders;

use App\Models\Donation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DonationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Donation::create([
            'name' => 'Providing Beds for 50 Needy Families',
            'description' => "We are dedicated to providing each of these 50 families with a brand-new bed, complete with mattresses and bedding. This project not only ensures a good night's sleep but also brings warmth and comfort to their homes. Your contribution can help us reach our goal.",
            'image' => 'img_v_2-min.jpg',
            'amount_needed' => 2000,
        ]);
        Donation::create([
            'name' => 'Providing Seating for a Community Center',
            'description' => "provide 100 sturdy and comfortable chairs for the community center. These chairs will enhance the center's capacity to host diverse events, from educational seminars to cultural celebrations",
            'image' => 'img_v_3-min.jpg',
            'amount_needed' => 4000,
        ]);
        Donation::create([
            'name' => 'Providing Lamps to Light Up Lives',
            'description' => "provide200 energy-efficient lamps to households without proper lighting. These lamps will not only brighten homes but also enable children to study after dark and families to engage in various activities more comfortably.",
            'image' => 'img_v_4-min.jpg',
            'amount_needed' => 1000,
        ]);
    }
}