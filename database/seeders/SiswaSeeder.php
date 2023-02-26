<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('siswa')->insert([
            'nama' => 'Iki',
            'nomor_induk' => '12345',
            'alamat' => 'Parung',
            'created_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('siswa')->insert([
            'nama' => 'Kirun',
            'nomor_induk' => '54321',
            'alamat' => 'Bogor',
            'created_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('siswa')->insert([
            'nama' => 'Rizki',
            'nomor_induk' => '34512',
            'alamat' => 'Depok',
            'created_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('siswa')->insert([
            'nama' => 'Alifah',
            'nomor_induk' => '10987',
            'alamat' => 'Pamulang',
            'created_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('siswa')->insert([
            'nama' => 'Nur',
            'nomor_induk' => '54333',
            'alamat' => 'Bogor',
            'created_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('siswa')->insert([
            'nama' => 'Riki',
            'nomor_induk' => '31512',
            'alamat' => 'Depok',
            'created_at' => date('Y-m-d H:i:s')
        ]);
    }
}
