<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class RefDataInstansiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ref_data_instansi')->insert([
            ['name' => 'Bagian Tata Usaha - Sekretariat Jenderal'],
            ['name' => 'Bagian Tata Usaha - Seksi Kepegawaian'],
            ['name' => 'Bagian Tata Usaha - Seksi Keuangan'],
            ['name' => 'Seksi Pendidikan Madrasah'],
            ['name' => 'Seksi Diniyah dan Pondok Pesantren'],
            ['name' => 'Seksi Pendidikan Agama Islam'],
            ['name' => 'Seksi Penyelenggara Haji dan Umrah'],
            ['name' => 'Seksi Bimbingan Masyarakat Islam'],
            ['name' => 'Seksi Penyelenggara Zakat dan Wakaf'],
            ['name' => 'Umum']
        ]);
    }
}
