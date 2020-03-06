<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('products')->delete();
        
        \DB::table('products')->insert(array (
            0 => 
            array (
                'id' => 1,
                'category_id' => 1,
                'description' => 'Noel wooden thing',
                'slug' => 'noel',
                'rating_average' => 3.0,
                'created_at' => '2019-12-06 17:16:00',
                'updated_at' => '2019-12-18 16:56:38',
                'name' => 'Noel',
                'price' => NULL,
                'stock' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'category_id' => 1,
                'description' => 'Cool Tree',
                'slug' => 'christmas-tree',
                'rating_average' => 4.0,
                'created_at' => '2019-12-09 19:26:36',
                'updated_at' => '2020-02-19 17:24:09',
                'name' => 'Christmas Tree',
                'price' => 2.5,
                'stock' => 10,
            ),
        ));
        
        
    }
}