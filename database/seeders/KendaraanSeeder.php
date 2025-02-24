<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KendaraanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kendaraans = [
            [
                'customer_id' => 1, // Sesuaikan dengan ID customer
                'jenis_kendaraan' => 'Mobil',
                'nomor_polisi' => 'B 1234 ABC',
                'merk' => 'Toyota',
                'tahun' => '2020',
            ],
            [
                'customer_id' => 2, // Sesuaikan dengan ID customer
                'jenis_kendaraan' => 'Motor',
                'nomor_polisi' => 'L 5678 XYZ',
                'merk' => 'Honda',
                'tahun' => '2019',
            ],
            // Tambahkan data kendaraan lainnya sesuai kebutuhan
        ];

        // Insert data kendaraan ke dalam table 'kendaraan'
        DB::table('kendaraan')->insert($kendaraans);
    }
}
