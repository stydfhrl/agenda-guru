<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gurus')->insert([
            'nama_guru' => 'Rizki Balotelli',
            'nik' => '3276098912738',
            'mapel' => 'Matematika',
            'username' => 'rizki',
            'password' => '123',
        ]);
    }
}
