<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CarouselHeader;

class CarouselHeaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CarouselHeader::create([
            'gambar' => 'header.png'
        ]);
        CarouselHeader::create([
            'gambar' => 'infografis-1.png'
        ]);
        CarouselHeader::create([
            'gambar' => 'infografis-2.png'
        ]);
    }
}
