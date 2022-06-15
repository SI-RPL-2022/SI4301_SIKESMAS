<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class dokter extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dokter = [
            [
                'role' => 'Dokter',
                'nama' => 'Drg. Heny Marta',
                'username' => 'dokter1',
                'password' => 'dokter1',
                'id_poli' => 1,
                'jam_praktik_awal' => '11:30:00',
                'jam_praktik_akhir' => '15:00:00'

            ],
            [
                'role' => 'Dokter',
                'nama' => 'Drg. Albert Akbar',
                'username' => 'dokter2',
                'password' => 'dokter2',
                'id_poli' => 1,
                'jam_praktik_awal' => '15:00:00',
                'jam_praktik_akhir' => '18:00:00'

            ],
            [
                'role' => 'Dokter',
                'nama' => 'Dr. Tatang',
                'username' => 'dokter3',
                'password' => 'dokter3',
                'id_poli' => 2,
                'jam_praktik_awal' => '11:30:00',
                'jam_praktik_akhir' => '15:00:00'

            ],
            [
                'role' => 'Dokter',
                'nama' => 'Dr. Herman',
                'username' => 'dokter4',
                'password' => 'dokter4',
                'id_poli' => 2,
                'jam_praktik_awal' => '15:00:00',
                'jam_praktik_akhir' => '18:00:00'

            ],
            [
                'role' => 'Dokter',
                'nama' => 'Dr. Sutarman',
                'username' => 'dokter5',
                'password' => 'dokter5',
                'id_poli' => 3,
                'jam_praktik_awal' => '11:30:00',
                'jam_praktik_akhir' => '15:00:00'

            ]
        ];
        DB::table('user')->insert($dokter);
    }
}
