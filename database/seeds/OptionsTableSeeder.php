<?php

use Illuminate\Database\Seeder;

class OptionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('options')->delete();
        
        \DB::table('options')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'red',
                'price' => 9.8,
                'stock' => 2,
                'group_id' => 1,
                'created_at' => '2019-12-10 17:15:00',
                'updated_at' => '2019-12-11 16:04:49',
                'product_id' => 1,
                'feature' => 0,
                'order' => 3,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'blue',
                'price' => 9.8,
                'stock' => 2,
                'group_id' => 1,
                'created_at' => '2019-12-10 17:15:00',
                'updated_at' => '2019-12-11 16:04:42',
                'product_id' => 1,
                'feature' => 0,
                'order' => 2,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'original',
                'price' => 9.8,
                'stock' => 2,
                'group_id' => 1,
                'created_at' => '2019-12-10 17:43:48',
                'updated_at' => '2019-12-10 17:43:48',
                'product_id' => 1,
                'feature' => 1,
                'order' => 1,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Yellow',
                'price' => 9.81,
                'stock' => 0,
                'group_id' => 1,
                'created_at' => '2019-12-18 14:52:11',
                'updated_at' => '2019-12-18 14:52:11',
                'product_id' => 1,
                'feature' => 0,
                'order' => 4,
            ),
        ));
        
        
    }
}