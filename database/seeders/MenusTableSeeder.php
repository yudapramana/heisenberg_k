<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MenusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menus')->delete();
        
        \DB::table('menus')->insert(array (
            0 => 
            array (
                'id' => 1,
                'created_at' => '2023-08-30 10:42:54',
                'updated_at' => '2023-09-07 09:16:35',
                'title' => 'Header',
                'location' => 'header',
                'content' => '[[{"id":11,"title":"Beranda","target":"_self","slug":"#","type":"custom","children":[[]]},{"id":1,"title":"Profil","target":"_self","slug":"profil","type":"category","children":[[{"id":2,"title":"KemenagPessel","target":"_self","slug":"kemenag-pessel","type":"category","children":[[{"id":6,"title":"Visi dan Misi","target":"_self","slug":"post/visi-dan-misi","type":"post"},{"id":7,"title":"Struktur Organisasi","target":"_self","slug":"post/struktur-organisasi","type":"post"}]]},{"id":12,"title":"Profil PPID","target":"_self","slug":"post/profil-ppid","type":"post","children":[[]]},{"id":13,"title":"Profil Pejabat","target":"_self","slug":"post/profil-pejabat","type":"post","children":[[]]},{"id":14,"title":"Struktur Organisasi PPID","target":"_self","slug":"post/struktur-organisasi-ppid","type":"post","children":[[]]},{"id":15,"title":"Tugas dan Fungsi PPID","target":"_self","slug":"post/tugas-dan-fungsi-ppid","type":"post","children":[[]]},{"id":16,"title":"Visi, Misi dan Moto PPID","target":"_self","slug":"post/visi-misi-dan-moto-ppid","type":"post","children":[[]]}]]},{"id":24,"title":"Regulasi","target":"_self","slug":"post/regulasi","type":"post","children":[[]]},{"id":4,"title":"Prosedur dan Informasi","target":"_self","slug":"prosedur-dan-informasi","type":"category","children":[[{"id":25,"title":"e-PPID Mobile","target":"_self","slug":"post/e-ppid-mobile","type":"post","children":[[]]},{"id":9,"title":"Prosedur Pengajuan Keberatan","target":"_self","slug":"post/prosedur-pengajuan-keberatan","type":"post","children":[[]]},{"id":10,"title":"Prosedur Sengketa Informasi","target":"_self","slug":"post/prosedur-sengketa-informasi","type":"post","children":[[]]},{"id":8,"title":"Prosedur Permohonan Informasi","target":"_self","slug":"post/prosedur-permohonan-informasi","type":"post","children":[[]]},{"id":26,"title":"SOP Layanan Informasi Publik","target":"_self","slug":"post/sop-layanan-informasi-publik","type":"post","children":[[]]}]]},{"id":27,"title":"Standar Layanan","target":"_self","slug":"standar-layanan","type":"category","children":[[{"id":29,"title":"Maklumat Pelayanan","target":"_self","slug":"post/maklumat-pelayanan","type":"post","children":[[]]},{"id":30,"title":"Jadwal Pelayanan","target":"_self","slug":"post/jadwal-pelayanan","type":"post","children":[[]]},{"id":31,"title":"Biaya Tarif Layanan","target":"_self","slug":"post/biaya-tarif-layanan","type":"post","children":[[]]},{"id":32,"title":"Standar Pelayanan","target":"_self","slug":"post/standar-pelayanan","type":"post","children":[[]]}]]},{"id":19,"title":"Informasi Publik","target":"_self","slug":"informasi-publik","type":"category","children":[[{"id":22,"title":"Informasi Setiap Saat","target":"_self","slug":"info/informasi_setiap_saat","type":"custom","children":[[]]},{"id":21,"title":"Informasi Serta Merta","target":"_self","slug":"info/informasi_serta_merta","type":"custom","children":[[]]},{"id":23,"title":"Informasi Dikecualikan","target":"_self","slug":"info/informasi_dikecualikan","type":"custom","children":[[]]},{"id":20,"title":"Informasi Berkala","target":"_self","slug":"info/informasi_berkala","type":"custom","children":[[]]}]]},{"id":28,"title":"Lainnya","target":"_self","slug":"lainnya","type":"category","children":[[{"id":18,"title":"Survey Publik","target":"_blank","slug":"https://sikm.kemenagpessel.com","type":"custom","children":[[]]},{"id":17,"title":"Kotak Saran","target":"_self","slug":"contact","type":"custom","children":[[]]},{"id":34,"title":"Aktifitas","target":"_self","slug":"aktifitas","type":"custom","children":[[]]},{"id":33,"title":"Berita","target":"_self","slug":"berita","type":"custom","children":[[]]}]]}]]',
            ),
        ));
        
        
    }
}