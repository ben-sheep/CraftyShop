<?php

use Illuminate\Database\Seeder;

class HomePageSlidersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('home_page_sliders')->delete();
        
        \DB::table('home_page_sliders')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'First title',
                'subtitle' => 'tt',
                'button_text' => 'Contact',
                'button_link' => 'http://www.amorboutiquehotel.com/wp-content/uploads/amor-boutique-hotel-jungle-spa-hammockamor-boutique-hotel-hammock-pool-sayulita-mexico-1760x850.jpg',
                'image' => 'home-page-sliders\\December2019\\7u0JZBOIsLCHnL4xvkIj.jpg',
                'created_at' => '2019-12-05 15:39:31',
                'updated_at' => '2019-12-05 15:39:31',
            ),
            1 => 
            array (
                'id' => 3,
                'title' => 'Second Title',
                'subtitle' => 'sub 2',
                'button_text' => 'Contact',
                'button_link' => 'http://www.amorboutiquehotel.com/wp-content/uploads/amor-boutique-hotel-jungle-spa-hammockamor-boutique-hotel-hammock-pool-sayulita-mexico-1760x850.jpg',
                'image' => 'home-page-sliders\\December2019\\imdwnPuTkNsEnnEKf7N6.jpg',
                'created_at' => '2019-12-09 16:39:56',
                'updated_at' => '2019-12-09 16:39:56',
            ),
        ));
        
        
    }
}