<?php

use Illuminate\Database\Seeder;

class ShopCategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('shop_categories')->delete();
        
        \DB::table('shop_categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Christmas',
                'order' => 1,
                'slug' => 'christmas',
                'parent_id' => NULL,
                'is_featured' => 1,
                'image' => 'shop-categories\\December2019\\ijcZXQ6XOyp6s8K3oQ4a.png',
                'created_at' => '2019-12-06 17:14:00',
                'updated_at' => '2019-12-09 18:32:59',
            ),
            1 => 
            array (
                'id' => 3,
                'name' => 'Sunny',
                'order' => 2,
                'slug' => 'sunny',
                'parent_id' => NULL,
                'is_featured' => 1,
                'image' => 'shop-categories\\December2019\\8lr5ooU3ubJWE8QCDc9u.jpg',
                'created_at' => '2019-12-09 18:39:21',
                'updated_at' => '2019-12-09 18:39:21',
            ),
            2 => 
            array (
                'id' => 4,
                'name' => 'Rain',
                'order' => 3,
                'slug' => 'rain',
                'parent_id' => NULL,
                'is_featured' => 1,
                'image' => 'shop-categories\\December2019\\ci9SBRjS0lEnGWqMF0Ri.jpg',
                'created_at' => '2019-12-09 18:39:57',
                'updated_at' => '2019-12-09 18:39:57',
            ),
            3 => 
            array (
                'id' => 5,
                'name' => 'Not Featured',
                'order' => 4,
                'slug' => 'not-featured',
                'parent_id' => NULL,
                'is_featured' => 0,
                'image' => 'shop-categories\\December2019\\m5KVQ8WC7F4u5UB3Ie9N.jpg',
                'created_at' => '2019-12-09 18:41:52',
                'updated_at' => '2019-12-09 18:41:52',
            ),
        ));
        
        
    }
}