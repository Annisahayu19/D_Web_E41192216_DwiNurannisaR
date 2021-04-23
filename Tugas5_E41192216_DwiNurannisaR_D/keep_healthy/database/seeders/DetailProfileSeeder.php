<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DetailProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // insert data ke table 
        DB::table('tb_admin')->insert([
            'username' => 'ayongoding',
            'passwor_admin' => '12345',
            'nama_lengkap' => 'ayongodingsekarang',
            'foto_admin' => 'picture.jpg'
        ]);
    }
}
