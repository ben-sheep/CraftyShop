<?php

use Illuminate\Database\Seeder;

class BasketItemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('basket_items')->delete();
        
        
        
    }
}