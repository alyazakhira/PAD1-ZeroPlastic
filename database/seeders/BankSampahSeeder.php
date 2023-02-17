<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\BankSampah;

class BankSampahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BankSampah::create([
            'nama' => 'Bank Sampah 1',
            'alamat' => 'Alamat 1',
            'id_pengelola' => 1,
        ]);

        BankSampah::create([
            'nama' => 'Bank Sampah 2',
            'alamat' => 'Alamat 2',
            'id_pengelola' => 1,
        ]);

        BankSampah::create([
            'nama' => 'Bank Sampah 3',
            'alamat' => 'Alamat 3',
            'id_pengelola' => 1,
        ]);
    }
}
