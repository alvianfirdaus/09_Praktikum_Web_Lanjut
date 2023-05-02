<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaMatakuliahSeeder extends Seeder
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
                'mahasiswa_nim' => '2141720022',
                'matakuliah_id' => 1,
                'nilai' => 'A'
            ],
            [
                'mahasiswa_nim' => '2141720022',
                'matakuliah_id' => 2,
                'nilai' => 'A'
            ],
            [
                'mahasiswa_nim' => '2141720022',
                'matakuliah_id' => 3,
                'nilai' => 'A'
            ],
            [
                'mahasiswa_nim' => '2141720022',
                'matakuliah_id' => 4,
                'nilai' => 'A'
            ],
            [
                'mahasiswa_nim' => '2141720055',
                'matakuliah_id' => 1,
                'nilai' => 'A'
            ],
            [
                'mahasiswa_nim' => '2141720055',
                'matakuliah_id' => 2,
                'nilai' => 'A'
            ],
            [
                'mahasiswa_nim' => '2141720055',
                'matakuliah_id' => 3,
                'nilai' => 'A'
            ],
            [
                'mahasiswa_nim' => '2141720055',
                'matakuliah_id' => 4,
                'nilai' => 'A'
            ],
            [
                'mahasiswa_nim' => '2141720057',
                'matakuliah_id' => 1,
                'nilai' => 'A'
            ],
            [
                'mahasiswa_nim' => '2141720057',
                'matakuliah_id' => 2,
                'nilai' => 'A'
            ],
            [
                'mahasiswa_nim' => '2141720057',
                'matakuliah_id' => 3,
                'nilai' => 'A'
            ],
            [
                'mahasiswa_nim' => '2141720057',
                'matakuliah_id' => 4,
                'nilai' => 'A'
            ],
            [
                'mahasiswa_nim' => '2141720076',
                'matakuliah_id' => 1,
                'nilai' => 'A'
            ],
            [
                'mahasiswa_nim' => '2141720076',
                'matakuliah_id' => 2,
                'nilai' => 'A'
            ],
            [
                'mahasiswa_nim' => '2141720076',
                'matakuliah_id' => 3,
                'nilai' => 'A'
            ],
            [
                'mahasiswa_nim' => '2141720076',
                'matakuliah_id' => 4,
                'nilai' => 'A'
            ],
            [
                'mahasiswa_nim' => '2141720143',
                'matakuliah_id' => 1,
                'nilai' => 'A'
            ],
            [
                'mahasiswa_nim' => '2141720143',
                'matakuliah_id' => 2,
                'nilai' => 'A'
            ],
            [
                'mahasiswa_nim' => '2141720143',
                'matakuliah_id' => 3,
                'nilai' => 'A'
            ],
            [
                'mahasiswa_nim' => '2141720143',
                'matakuliah_id' => 4,
                'nilai' => 'A'
            ],
            [
                'mahasiswa_nim' => '2141720170',
                'matakuliah_id' => 1,
                'nilai' => 'A'
            ],
            [
                'mahasiswa_nim' => '2141720170',
                'matakuliah_id' => 2,
                'nilai' => 'B'
            ],
            [
                'mahasiswa_nim' => '2141720170',
                'matakuliah_id' => 3,
                'nilai' => 'C'
            ],
            [
                'mahasiswa_nim' => '2141720170',
                'matakuliah_id' => 4,
                'nilai' => 'C'
            ],
        ];
        DB::table('mahasiswa_matakuliah')->insert($data);
    }
}
