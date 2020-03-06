<?php

use Illuminate\Database\Seeder;

class ProductImagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('product_images')->delete();
        
        \DB::table('product_images')->insert(array (
            0 => 
            array (
                'id' => 3,
                'product_id' => 2,
                'image' => 'product-images\\December2019\\OmEqkKtaR04C7ofWFTGY.jpg',
                'thumbnail' => 1,
                'created_at' => '2019-12-09 19:27:00',
                'updated_at' => '2019-12-11 15:48:58',
                'order' => 1,
            ),
            1 => 
            array (
                'id' => 4,
                'product_id' => 1,
                'image' => 'product-images\\December2019\\cVgMo8DVmGnWaRv6IB4s.jpg',
                'thumbnail' => 1,
                'created_at' => '2019-12-09 23:15:00',
                'updated_at' => '2019-12-11 15:47:16',
                'order' => 1,
            ),
            2 => 
            array (
                'id' => 5,
                'product_id' => 1,
                'image' => 'product-images\\December2019\\9EViyyELe2O3cHMrbBh4.jpg',
                'thumbnail' => 0,
                'created_at' => '2019-12-11 15:20:00',
                'updated_at' => '2019-12-11 15:47:10',
                'order' => 3,
            ),
            3 => 
            array (
                'id' => 6,
                'product_id' => 1,
                'image' => 'product-images\\December2019\\0jZXHSLFojTCJtcDW16p.jpg',
                'thumbnail' => 0,
                'created_at' => '2019-12-11 15:21:00',
                'updated_at' => '2019-12-11 15:47:03',
                'order' => 2,
            ),
        ));
        
        
    }
}