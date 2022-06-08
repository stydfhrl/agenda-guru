<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AgendaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('agendas')->insert([
            'nama_guru' => 'Rizki Balotelli',
            'mapel' => 'Matematika',
            'materi' => 'Aljabar',
            'darijam' => 'jam ke-1',
            'sampaijam' => 'jam ke-3',
            'absensi' => 'Nihil',
            'nama_kelas' => 'X MM 2',
            'metode' => 'offline',
            'link_belajar' => '-',
            'screenshot' => '-',
            'keterangan' => '-',
        ]);
    }
}
