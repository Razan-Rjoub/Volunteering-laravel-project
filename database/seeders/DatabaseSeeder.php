<?php

namespace Database\Seeders;

use Database\Seeders\CategorySeeder;
use Database\Seeders\DonationSeeder;
use Database\Seeders\ItemSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CategorySeeder::class,
            DonationSeeder::class,
            ItemSeeder::class,
        ]);
    }
}
