<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CarouselsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('carousels')->delete();
        
        \DB::table('carousels')->insert(array (
            0 => 
            array (
                'id_carousel' => 1,
                'created_at' => '2023-07-04 19:34:25',
                'updated_at' => '2023-08-30 14:25:32',
                'image_url' => 'https://res.cloudinary.com/dezj1x6xp/image/upload/v1693380331/PandanViewMandeh/landing-kmg_vrodjv.jpg',
                'title' => 'Carousel 1',
                'active' => 'yes',
            ),
            1 => 
            array (
                'id_carousel' => 2,
                'created_at' => '2023-07-04 19:38:03',
                'updated_at' => '2023-08-30 13:39:15',
                'image_url' => 'https://res.cloudinary.com/dezj1x6xp/image/upload/v1693377556/PandanViewMandeh/image_750x_648fb061e6571_hke1ce.jpg',
                'title' => 'Carousel 2',
                'active' => 'yes',
            ),
            2 => 
            array (
                'id_carousel' => 3,
                'created_at' => '2023-07-04 19:41:24',
                'updated_at' => '2023-08-30 14:27:51',
                'image_url' => 'https://res.cloudinary.com/dezj1x6xp/image/upload/v1693380470/PandanViewMandeh/image_750x_64dddb4cc7b28_ubcssu.jpg',
                'title' => 'Carousel 3',
                'active' => 'yes',
            ),
            3 => 
            array (
                'id_carousel' => 4,
                'created_at' => '2023-07-04 19:41:42',
                'updated_at' => '2023-08-30 14:28:41',
                'image_url' => 'https://res.cloudinary.com/dezj1x6xp/image/upload/v1693380521/PandanViewMandeh/image_750x_629fed6566c53_jequ9z.jpg',
                'title' => 'Carousel 4',
                'active' => 'yes',
            ),
        ));
        
        
    }
}