<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Subscriber;

class SubscriberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Subscriber::create([
            'email' => 'sky.zonhori@gmail.com',
            'edisi_terakhir' => 'November 2022',
        ]);
        Subscriber::create([
            'email' => 'dinabero2015@gmail.com',
            'edisi_terakhir' => 'November 2022',
        ]);
        Subscriber::create([
            'email' => 'kecambahgoyang6@gmail.com',
            'edisi_terakhir' => 'November 2022',
        ]);
    }
}
