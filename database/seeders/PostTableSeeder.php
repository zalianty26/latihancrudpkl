<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sampel = [
            ['title' => 'Assalaam Juara', 'content' => 'Assalaam Studio'],
            ['title' => 'Assalaam berkurban', 'content' => 'Assalaam Studio'],
            ['title' => 'Assalaam bersholawat', 'content' => 'Assalaam Studio'],
        ];

        DB::table('posts')->insert($sampel);
    }
}
