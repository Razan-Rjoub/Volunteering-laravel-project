<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Service::create([
            'name' => 'Delivery Volunteer',
            'description' => 'Make a difference as a Delivery Volunteer, ensuring essential items reach those who need them. Your efforts can bring comfort and support to those in our community.',
            'image' => 'v1.jpg',
        ]);

        Service::create([
            'name' => 'Maintenance Volunteer',
            'description' => 'Make a difference as a Maintenance Volunteer, ensuring essential items reach those who need them. Your efforts can bring comfort and support to those in our community.',
            'image' => 'v2.jpg',
        ]);
    }
}
