<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Qrcode;

class QrSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // Seed for QR Code struktural
        Qrcode::create([
            'nik'   =>  '194700122',
            'name'  =>  'Prof. Dr. Andi Adriansyah, M.Eng'
        ]);

        Qrcode::create([
            'nik'   =>  '110580310',
            'name'  =>  'Dr. Harwikarya, MT'
        ]);
    }
}
