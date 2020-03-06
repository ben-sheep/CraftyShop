<?php

use Illuminate\Database\Seeder;

class FeaturesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('features')->delete();
        
        \DB::table('features')->insert(array (
            0 => 
            array (
                'id' => 1,
                'product_id' => 1,
                'order' => 4,
                'size' => 1,
                'created_at' => '2019-12-06 18:30:00',
                'updated_at' => '2019-12-09 14:36:37',
                'category_id' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'product_id' => 1,
                'order' => 2,
                'size' => 1,
                'created_at' => '2019-12-09 14:33:00',
                'updated_at' => '2019-12-09 17:25:37',
                'category_id' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'product_id' => 1,
                'order' => 3,
                'size' => 1,
                'created_at' => '2019-12-09 14:33:00',
                'updated_at' => '2019-12-09 14:34:19',
                'category_id' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'product_id' => 1,
                'order' => 3,
                'size' => 0,
                'created_at' => '2019-12-09 14:33:00',
                'updated_at' => '2019-12-09 14:39:39',
                'category_id' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'product_id' => 1,
                'order' => 2,
                'size' => 0,
                'created_at' => '2019-12-09 14:33:56',
                'updated_at' => '2019-12-09 14:33:56',
                'category_id' => NULL,
            ),
        ));
        
        
    }
}