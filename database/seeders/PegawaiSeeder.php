<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pegawai; // Pastikan untuk mengimpor model Pegawai

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pegawai::factory()->count(10)->create();
    }
}
