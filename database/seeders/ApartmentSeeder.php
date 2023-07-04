<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Apartment;

class ApartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Apartment::create([
            'name' => '1-Yotoqxona',
        ]);
        Apartment::create([
            'name' => '2-Yotoqxona',
        ]);
    }
}
