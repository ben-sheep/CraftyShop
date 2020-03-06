<?php

use Illuminate\Database\Seeder;

class GroupsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('groups')->delete();
        
        \DB::table('groups')->insert(array (
            0 => 
            array (
                'id' => 1,
                'group' => 'Colour',
                'created_at' => '2019-12-10 17:36:00',
                'updated_at' => '2019-12-10 17:36:16',
            ),
        ));
        
        
    }
}