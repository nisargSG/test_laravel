<?php

namespace Database\Seeders;

use App\Models\Bike;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BikeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Bike::create( [
            'name' => 'Kawasaki',
            'color' => 'Green',
            'price' => 9000,
        ]);
    }
}
