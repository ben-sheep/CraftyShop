<?php

use Illuminate\Database\Seeder;

class ReviewsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('reviews')->delete();
        
        \DB::table('reviews')->insert(array (
            0 => 
            array (
                'id' => 1,
                'customer_id' => 1,
                'product_id' => 1,
                'rating' => 5,
                'review' => 'A good christmas product',
                'created_at' => '2019-12-18 16:42:24',
                'updated_at' => '2019-12-18 16:42:24',
            ),
            1 => 
            array (
                'id' => 2,
                'customer_id' => 1,
                'product_id' => 1,
                'rating' => 3,
                'review' => 'Alright Christmas product',
                'created_at' => '2019-12-18 18:41:33',
                'updated_at' => '2019-12-18 18:41:33',
            ),
        ));
        
        
    }
}