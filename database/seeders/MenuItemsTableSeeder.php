<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MenuItemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menu_items')->delete();
        
        \DB::table('menu_items')->insert(array (
            0 => 
            array (
                'id' => 1,
                'created_at' => '2023-08-30 10:42:57',
                'updated_at' => '2023-08-30 10:42:57',
                'title' => 'Profil',
                'name' => NULL,
                'slug' => 'profil',
                'type' => 'category',
                'target' => '_self',
                'menu_id' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'created_at' => '2023-08-30 10:42:57',
                'updated_at' => '2023-08-30 10:42:57',
                'title' => 'KemenagPessel',
                'name' => NULL,
                'slug' => 'kemenag-pessel',
                'type' => 'category',
                'target' => '_self',
                'menu_id' => 1,
            ),
            2 => 
            array (
                'id' => 4,
                'created_at' => '2023-08-30 10:42:57',
                'updated_at' => '2023-08-30 10:42:57',
                'title' => 'Prosedur dan Informasi',
                'name' => NULL,
                'slug' => 'prosedur-dan-informasi',
                'type' => 'category',
                'target' => '_self',
                'menu_id' => 1,
            ),
            3 => 
            array (
                'id' => 6,
                'created_at' => '2023-08-30 10:43:08',
                'updated_at' => '2023-08-30 10:43:08',
                'title' => 'Visi dan Misi',
                'name' => NULL,
                'slug' => 'post/visi-dan-misi',
                'type' => 'post',
                'target' => '_self',
                'menu_id' => 1,
            ),
            4 => 
            array (
                'id' => 7,
                'created_at' => '2023-08-30 10:43:08',
                'updated_at' => '2023-08-30 10:43:08',
                'title' => 'Struktur Organisasi',
                'name' => NULL,
                'slug' => 'post/struktur-organisasi',
                'type' => 'post',
                'target' => '_self',
                'menu_id' => 1,
            ),
            5 => 
            array (
                'id' => 8,
                'created_at' => '2023-08-30 10:43:08',
                'updated_at' => '2023-08-30 10:43:08',
                'title' => 'Prosedur Permohonan Informasi',
                'name' => NULL,
                'slug' => 'post/prosedur-permohonan-informasi',
                'type' => 'post',
                'target' => '_self',
                'menu_id' => 1,
            ),
            6 => 
            array (
                'id' => 9,
                'created_at' => '2023-08-30 10:43:08',
                'updated_at' => '2023-08-30 10:43:08',
                'title' => 'Prosedur Pengajuan Keberatan',
                'name' => NULL,
                'slug' => 'post/prosedur-pengajuan-keberatan',
                'type' => 'post',
                'target' => '_self',
                'menu_id' => 1,
            ),
            7 => 
            array (
                'id' => 10,
                'created_at' => '2023-08-30 10:43:09',
                'updated_at' => '2023-08-30 10:43:09',
                'title' => 'Prosedur Sengketa Informasi',
                'name' => NULL,
                'slug' => 'post/prosedur-sengketa-informasi',
                'type' => 'post',
                'target' => '_self',
                'menu_id' => 1,
            ),
            8 => 
            array (
                'id' => 11,
                'created_at' => '2023-08-30 12:49:47',
                'updated_at' => '2023-08-30 12:49:47',
                'title' => 'Beranda',
                'name' => NULL,
                'slug' => '#',
                'type' => 'custom',
                'target' => '_self',
                'menu_id' => 1,
            ),
            9 => 
            array (
                'id' => 12,
                'created_at' => '2023-08-30 12:58:08',
                'updated_at' => '2023-08-30 12:58:08',
                'title' => 'Profil PPID',
                'name' => NULL,
                'slug' => 'post/profil-ppid',
                'type' => 'post',
                'target' => '_self',
                'menu_id' => 1,
            ),
            10 => 
            array (
                'id' => 13,
                'created_at' => '2023-08-30 12:58:08',
                'updated_at' => '2023-08-30 12:58:08',
                'title' => 'Profil Pejabat',
                'name' => NULL,
                'slug' => 'post/profil-pejabat',
                'type' => 'post',
                'target' => '_self',
                'menu_id' => 1,
            ),
            11 => 
            array (
                'id' => 14,
                'created_at' => '2023-08-30 13:00:30',
                'updated_at' => '2023-08-30 13:00:30',
                'title' => 'Struktur Organisasi PPID',
                'name' => NULL,
                'slug' => 'post/struktur-organisasi-ppid',
                'type' => 'post',
                'target' => '_self',
                'menu_id' => 1,
            ),
            12 => 
            array (
                'id' => 15,
                'created_at' => '2023-08-30 13:00:30',
                'updated_at' => '2023-08-30 13:00:30',
                'title' => 'Tugas dan Fungsi PPID',
                'name' => NULL,
                'slug' => 'post/tugas-dan-fungsi-ppid',
                'type' => 'post',
                'target' => '_self',
                'menu_id' => 1,
            ),
            13 => 
            array (
                'id' => 16,
                'created_at' => '2023-08-30 13:02:17',
                'updated_at' => '2023-08-30 13:02:17',
                'title' => 'Visi, Misi dan Moto PPID',
                'name' => NULL,
                'slug' => 'post/visi-misi-dan-moto-ppid',
                'type' => 'post',
                'target' => '_self',
                'menu_id' => 1,
            ),
            14 => 
            array (
                'id' => 17,
                'created_at' => '2023-08-30 14:29:45',
                'updated_at' => '2023-08-30 14:29:45',
                'title' => 'Kotak Saran',
                'name' => NULL,
                'slug' => 'contact',
                'type' => 'custom',
                'target' => '_self',
                'menu_id' => 1,
            ),
            15 => 
            array (
                'id' => 18,
                'created_at' => '2023-08-30 17:08:35',
                'updated_at' => '2023-08-31 19:35:59',
                'title' => 'Survey Publik',
                'name' => 'Survey Indeks Kepuasan Masyarakat',
                'slug' => 'https://sikm.kemenagpessel.com',
                'type' => 'custom',
                'target' => '_blank',
                'menu_id' => 1,
            ),
            16 => 
            array (
                'id' => 19,
                'created_at' => '2023-08-30 17:36:26',
                'updated_at' => '2023-08-30 17:36:26',
                'title' => 'Informasi Publik',
                'name' => NULL,
                'slug' => 'informasi-publik',
                'type' => 'category',
                'target' => '_self',
                'menu_id' => 1,
            ),
            17 => 
            array (
                'id' => 20,
                'created_at' => '2023-08-30 17:36:54',
                'updated_at' => '2023-08-30 17:36:54',
                'title' => 'Informasi Berkala',
                'name' => NULL,
                'slug' => 'info/informasi_berkala',
                'type' => 'custom',
                'target' => '_self',
                'menu_id' => 1,
            ),
            18 => 
            array (
                'id' => 21,
                'created_at' => '2023-08-30 17:37:24',
                'updated_at' => '2023-08-30 17:37:24',
                'title' => 'Informasi Serta Merta',
                'name' => NULL,
                'slug' => 'info/informasi_serta_merta',
                'type' => 'custom',
                'target' => '_self',
                'menu_id' => 1,
            ),
            19 => 
            array (
                'id' => 22,
                'created_at' => '2023-08-30 17:37:43',
                'updated_at' => '2023-08-30 17:37:43',
                'title' => 'Informasi Setiap Saat',
                'name' => NULL,
                'slug' => 'info/informasi_setiap_saat',
                'type' => 'custom',
                'target' => '_self',
                'menu_id' => 1,
            ),
            20 => 
            array (
                'id' => 23,
                'created_at' => '2023-08-30 17:37:58',
                'updated_at' => '2023-08-30 17:37:58',
                'title' => 'Informasi Dikecualikan',
                'name' => NULL,
                'slug' => 'info/informasi_dikecualikan',
                'type' => 'custom',
                'target' => '_self',
                'menu_id' => 1,
            ),
            21 => 
            array (
                'id' => 24,
                'created_at' => '2023-08-31 00:42:20',
                'updated_at' => '2023-08-31 00:42:20',
                'title' => 'Regulasi',
                'name' => NULL,
                'slug' => 'post/regulasi',
                'type' => 'post',
                'target' => '_self',
                'menu_id' => 1,
            ),
            22 => 
            array (
                'id' => 25,
                'created_at' => '2023-08-31 19:26:46',
                'updated_at' => '2023-08-31 19:26:46',
                'title' => 'e-PPID Mobile',
                'name' => NULL,
                'slug' => 'post/e-ppid-mobile',
                'type' => 'post',
                'target' => '_self',
                'menu_id' => 1,
            ),
            23 => 
            array (
                'id' => 26,
                'created_at' => '2023-08-31 19:30:37',
                'updated_at' => '2023-08-31 19:30:37',
                'title' => 'SOP Layanan Informasi Publik',
                'name' => NULL,
                'slug' => 'post/sop-layanan-informasi-publik',
                'type' => 'post',
                'target' => '_self',
                'menu_id' => 1,
            ),
            24 => 
            array (
                'id' => 27,
                'created_at' => '2023-08-31 19:34:30',
                'updated_at' => '2023-08-31 19:34:30',
                'title' => 'Standar Layanan',
                'name' => NULL,
                'slug' => 'standar-layanan',
                'type' => 'category',
                'target' => '_self',
                'menu_id' => 1,
            ),
            25 => 
            array (
                'id' => 28,
                'created_at' => '2023-08-31 19:35:35',
                'updated_at' => '2023-08-31 19:35:35',
                'title' => 'Lainnya',
                'name' => NULL,
                'slug' => 'lainnya',
                'type' => 'category',
                'target' => '_self',
                'menu_id' => 1,
            ),
            26 => 
            array (
                'id' => 29,
                'created_at' => '2023-08-31 19:40:28',
                'updated_at' => '2023-08-31 19:40:28',
                'title' => 'Maklumat Pelayanan',
                'name' => NULL,
                'slug' => 'post/maklumat-pelayanan',
                'type' => 'post',
                'target' => '_self',
                'menu_id' => 1,
            ),
            27 => 
            array (
                'id' => 30,
                'created_at' => '2023-08-31 19:40:28',
                'updated_at' => '2023-08-31 19:40:28',
                'title' => 'Jadwal Pelayanan',
                'name' => NULL,
                'slug' => 'post/jadwal-pelayanan',
                'type' => 'post',
                'target' => '_self',
                'menu_id' => 1,
            ),
            28 => 
            array (
                'id' => 31,
                'created_at' => '2023-08-31 19:40:28',
                'updated_at' => '2023-08-31 19:40:28',
                'title' => 'Biaya Tarif Layanan',
                'name' => NULL,
                'slug' => 'post/biaya-tarif-layanan',
                'type' => 'post',
                'target' => '_self',
                'menu_id' => 1,
            ),
            29 => 
            array (
                'id' => 32,
                'created_at' => '2023-08-31 19:40:28',
                'updated_at' => '2023-08-31 19:40:28',
                'title' => 'Standar Pelayanan',
                'name' => NULL,
                'slug' => 'post/standar-pelayanan',
                'type' => 'post',
                'target' => '_self',
                'menu_id' => 1,
            ),
            30 => 
            array (
                'id' => 33,
                'created_at' => '2023-09-07 08:05:29',
                'updated_at' => '2023-09-07 08:05:29',
                'title' => 'Berita',
                'name' => NULL,
                'slug' => 'berita',
                'type' => 'custom',
                'target' => '_self',
                'menu_id' => 1,
            ),
            31 => 
            array (
                'id' => 34,
                'created_at' => '2023-09-07 09:16:27',
                'updated_at' => '2023-09-07 09:16:27',
                'title' => 'Aktifitas',
                'name' => NULL,
                'slug' => 'aktifitas',
                'type' => 'custom',
                'target' => '_self',
                'menu_id' => 1,
            ),
        ));
        
        
    }
}