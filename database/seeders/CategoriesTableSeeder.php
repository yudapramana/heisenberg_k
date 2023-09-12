<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Profil',
                'slug' => 'profil',
                'keywords' => '',
                'meta_desc' => '',
                'created_at' => '2023-07-10 12:14:14',
                'updated_at' => '2023-07-10 12:14:14',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'KemenagPessel',
                'slug' => 'kemenag-pessel',
                'keywords' => '',
                'meta_desc' => '',
                'created_at' => '2023-07-10 12:14:34',
                'updated_at' => '2023-07-10 12:14:34',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'Regulasi',
                'slug' => 'regulasi',
                'keywords' => '',
                'meta_desc' => '',
                'created_at' => '2023-07-10 12:15:30',
                'updated_at' => '2023-07-10 12:15:30',
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'Prosedur dan Informasi',
                'slug' => 'prosedur-dan-informasi',
                'keywords' => '',
                'meta_desc' => '',
                'created_at' => '2023-07-11 11:34:28',
                'updated_at' => '2023-07-11 11:34:28',
            ),
            4 => 
            array (
                'id' => 5,
                'title' => 'Standar Layanan',
                'slug' => 'standar-layanan',
                'keywords' => 'Standar Layanan',
                'meta_desc' => 'Standar Layanan',
                'created_at' => '2023-08-30 10:50:24',
                'updated_at' => '2023-08-30 10:50:24',
            ),
            5 => 
            array (
                'id' => 6,
                'title' => 'Berita',
                'slug' => 'berita',
                'keywords' => 'Berita',
                'meta_desc' => 'Berita',
                'created_at' => '2023-08-30 23:13:51',
                'updated_at' => '2023-08-30 23:13:51',
            ),
            6 => 
            array (
                'id' => 7,
                'title' => 'Lainnya',
                'slug' => 'lainnya',
                'keywords' => 'Lainnya',
                'meta_desc' => 'Lainnya',
                'created_at' => '2023-08-31 19:35:22',
                'updated_at' => '2023-08-31 19:35:22',
            ),
        ));
        
        
    }
}