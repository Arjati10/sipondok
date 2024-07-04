<?php

namespace Database\Seeders;

use App\Models\Santri;
use Illuminate\Database\Seeder;

class SantrisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $santris = [
            [
                'id'                        => 'fa201ed9-6016-4d90-b3aa-f4858c5260d6',
                'nama'                      => 'FIRDA NUR HUSNIA',
                'alamat'                    => '01/03, DADAPAN, DADAPAN, SEDAN, REMBANG',
                'nisn'                      => '0035958652',
                'no_kk'                     => '3317062303090020',
                'nik'                       => '3317065608010002',
                'tempat_lahir'              => 'REMBANG',
                'tanggal_lahir'             => '2001-06-16',                
                'phone'                     => '082197572600',
                'nama_ayah'                 => 'MUZAHID',
                'nik_ayah'                  => '3317060208720002',
                'pekerjaan_ayah'            => 'WIRASWASTA',
                'riwayat_pendidikan_ayah'   => 'SLTA',
                'nama_ibu'                  => 'SITI SOLIHAH',
                'nik_ibu'                   => '3317064304820005',
                'pekerjaan_ibu'             => 'MENGURUS RUMAH TANGGA',
                'riwayat_pendidikan_ibu'    => 'SLTP',
                'telfon_orang_tua'          => '0812345678',
                'tahun_masuk'               => '2017',
            ],
            [
                'id'                        => 'fa201ed9-6016-4d90-b3aa-f3858c5260d7',
                'nama'                      => 'ILHAM FAHRURRIFQI',
                'alamat'                    => '02/02, TLAMANG, TULUNGREJO, BESUKI, TULUNGAGUNG',
                'nisn'                      => '0006840618',
                'no_kk'                     => '3504150603053358',
                'nik'                       => '3504151105000001',
                'tempat_lahir'              => 'TULUNGAGUNG',
                'tanggal_lahir'             => '2000-05-11',                
                'phone'                     => '082197572600',
                'nama_ayah'                 => 'AHMAD MIDIANTO',
                'nik_ayah'                  => '3504152009650001',
                'pekerjaan_ayah'            => 'WIRASWASTA',
                'riwayat_pendidikan_ayah'   => 'SLTA',
                'nama_ibu'                  => 'UMI KULSUM',
                'nik_ibu'                   => '3504154805750001',
                'pekerjaan_ibu'             => 'PETANI',
                'riwayat_pendidikan_ibu'    => 'SLTP',
                'telfon_orang_tua'          => '0812345678',
                'tahun_masuk'               => '2020',
            ],
            [
                'id'                        => 'fa201ed9-6016-4d90-b3aa-f4858c5160d8',
                'nama'                      => 'NAJWA SYAUQI GHUFRON',
                'alamat'                    => '02/02, KUNDUNG, TANGGULKUNDUNG, BESUKI, TULUNGAGUNG',
                'nisn'                      => '0084922958',
                'no_kk'                     => '3504150503052123',
                'nik'                       => '3504152104080003',
                'tempat_lahir'              => 'TULUNGAGUNG',
                'tanggal_lahir'             => '2008-04-21',                
                'phone'                     => '082197572600',
                'nama_ayah'                 => 'MUHSIN',
                'nik_ayah'                  => '3504150111640001',
                'pekerjaan_ayah'            => 'PETANI',
                'riwayat_pendidikan_ayah'   => 'SD',
                'nama_ibu'                  => 'LAILATUL NIKMAH',
                'nik_ibu'                   => '3504157008750002',
                'pekerjaan_ibu'             => 'MENGURUS RUMAH TANGGA',
                'riwayat_pendidikan_ibu'    => 'SD',
                'telfon_orang_tua'          => '0812345678',
                'tahun_masuk'               => '2023',
            ]
        ];

        foreach($santris as $santri){
            Santri::create($santri);
        }
    }
}
