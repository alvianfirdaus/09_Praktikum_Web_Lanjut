<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewMahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'Nim' => 2141720895,
                'Nama' => 'Muhammad Hamka',
                'Tanggal_Lahir' => '30 Agustus 1998',
                'Kelas' => 'TI-2F',
                'Jurusan' => 'Teknologi Informasi',
                'No_Handphone' => '087896548574',
                'Email' => 'hamka@gmail.com'
            ],
            [
                'Nim' => 2141720458,
                'Nama' => 'Muhammad Zaki',
                'Tanggal_Lahir' => '20 April 1997',
                'Kelas' => 'TI-2F',
                'Jurusan' => 'Teknologi Informasi',
                'No_Handphone' => '083853549074',
                'Email' => 'zaki@gmail.com'
            ],
            [
                'Nim' => 2141720726,
                'Nama' => 'Muhammad Dikri',
                'Tanggal_Lahir' => '10 Februari 1994',
                'Kelas' => 'TI-2F',
                'Jurusan' => 'Teknologi Informasi',
                'No_Handphone' => '087906548598',
                'Email' => 'dikri@gmail.com'
            ],
            [
                'Nim' => 2141720645,
                'Nama' => 'Abdul Karim',
                'Tanggal_Lahir' => '19 Maret 1990',
                'Kelas' => 'TI-2F',
                'Jurusan' => 'Teknologi Informasi',
                'No_Handphone' => '081986548592',
                'Email' => 'karim@gmail.com'
            ],
            [
                'Nim' => 2141720875,
                'Nama' => 'Icha',
                'Tanggal_Lahir' => '30 Juli 2002',
                'Kelas' => 'TI-2F',
                'Jurusan' => 'Teknologi Informasi',
                'No_Handphone' => '081986548782',
                'Email' => 'icha@gmail.com'
            ],
        ];
        DB::table('mahasiswas')->insert($data);
    }
}
