<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class SiswaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sampel = [
            ['nis' => '10', 'nama_siswa' => 'zalianty', 'alamat_siswa' => 'bmi', 'tanggal_lahir' => '2004-11-26'],
            ['nis' => '11', 'nama_siswa' => 'bintara', 'alamat_siswa' => 'boneng', 'tanggal_lahir' => '2005-11-27'],

        ];

        DB::table('siswa')->insert($sampel);
    }
}
