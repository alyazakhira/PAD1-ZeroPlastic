<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Web Admin
        User::create([
            'name' => 'Alya Zakhira',
            'email' => 'zakhiralya@gmail.com',
            'password' => Hash::make('12345'),
            'isContentCreator' => true,
            'isBSAdmin' => true,
            'isWebAdmin' => true,
        ]);

        User::create([
            'name' => 'Sky Zonhori',
            'email' => 'sky.zonhori@gmail.com',
            'password' => Hash::make('galaxsky'),
            'isContentCreator' => true,
            'isBSAdmin' => true,
            'isWebAdmin' => true,
        ]);

        // Full privilege member
        User::create([
            'name' => 'Elyra Dina',
            'email' => 'elyra.dina.oktaviani@gmail.com',
            'password' => Hash::make('12345'),
            'isContentCreator' => true,
            'isBSAdmin' => true,
            'isWebAdmin' => false,
        ]);

        // Admin bank sampah only
        User::create([
            'name' => 'Luthfia Nisa',
            'email' => 'luthfianisa@gmail.com',
            'password' => Hash::make('12345'),
            'isContentCreator' => false,
            'isBSAdmin' => true,
            'isWebAdmin' => false,
        ]);

        // Content creator only
        User::create([
            'name' => 'Zafna Khairunnisa',
            'email' => 'zafna.khairunnisa@gmail.com',
            'password' => Hash::make('12345'),
            'isContentCreator' => true,
            'isBSAdmin' => false,
            'isWebAdmin' => false,
        ]);

        $this->call([
            ArticleSeeder::class,
            ProductSeeder::class,
            CarouselHeaderSeeder::class,
            BankSampahSeeder::class,
        ]);
    }
}
