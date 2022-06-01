<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class poli extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $poli = [
            [
                'nama_poli' => 'Poli Gigi',
                'foto' => 'gigi.jpg',
            ],
            [
                'nama_poli' => 'Poli Anak',
                'foto' => 'anak.jpg',
            ],
            [
                'nama_poli' => 'Poli Mata',
                'foto' => 'mata.jpg',
            ],
            [
                'nama_poli' => 'Poli Umum',
                'foto' => 'umum.jpg',
            ],
            [
                'nama_poli' => 'Poli Kandungan',
                'foto' => 'kandungan.jpg',
            ],
            [
                'nama_poli' => 'Poli THT',
                'foto' => 'tht.jpg',
            ],
        ];
        DB::table('poli')->insert($poli);

    }
}
