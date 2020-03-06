<?php

use Illuminate\Database\Seeder;

class TabOrdersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tab_orders')->delete();
        
        \DB::table('tab_orders')->insert(array (
            0 => 
            array (
                'id' => 1,
                'customer_id' => 1,
                'shipping_cost' => '2.00',
                'basket_total' => '66.30',
                'first_name' => 'Admin',
                'last_name' => 'Least',
                'billing_address' => '45 Dawberry Fields Road, Birmingham, B14 6PH',
                'shipping_address' => '44 Valbourne Road, Birmingham, B14 6NE',
                'status' => 'order placed',
                'delivery_note' => 'Knock Loud',
                'created_at' => '2020-03-06 15:33:54',
                'updated_at' => '2020-03-06 15:33:54',
            ),
            1 => 
            array (
                'id' => 2,
                'customer_id' => 1,
                'shipping_cost' => '2.00',
                'basket_total' => '56.50',
                'first_name' => 'Admin',
                'last_name' => 'Least',
                'billing_address' => '45 Dawberry Fields Road, Birmingham, B14 6PH',
                'shipping_address' => '44 Valbourne Road, Birmingham, B14 6NE',
                'status' => 'Order placed',
                'delivery_note' => 'heem',
                'created_at' => '2020-03-06 15:55:40',
                'updated_at' => '2020-03-06 15:55:40',
            ),
        ));
        
        
    }
}