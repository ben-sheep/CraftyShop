<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('users')->delete();

        \DB::table('users')->insert(array (
            0 =>
            array (
                'id' => 1,
                //'role_id' => 1,
                'first_name' => 'Admin',
                'email' => 'admin@admin.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$8paH0ZWN1eZHTnFNMPoNVOhsQ.2HFJK9kciRq1kc3YB0818aKf2qO',
                'remember_token' => 'VGgB8PJnJWctvddmHJVPt4JBL9vEOk9UDuKPVstmLpMjeOpgtvXk3AuFnWAM',
                'settings' => NULL,
                'created_at' => '2019-12-02 16:28:15',
                'updated_at' => '2020-03-06 15:55:28',
                'last_name' => 'Least',
                'shipping_address' => '44 Valbourne Road, Birmingham, B14 6NE',
                'stripe_id' => 'cus_GosP2tLblBrHK2',
                'card_brand' => NULL,
                'card_last_four' => NULL,
                'trial_ends_at' => NULL,
                'billing_address' => '45 Dawberry Fields Road, Birmingham, B14 6PH',
                'phone' => 11234,
            ),
            1 =>
            array (
                'id' => 2,
                //'role_id' => 2,
                'first_name' => 'Testt',
                'email' => 'test@mail.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$1Ciq2WYiZCTS6lRbXNu.7Oeiy9MQfr2zbwyc3wD5RAslYUpkw76Im',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2020-02-04 15:47:11',
                'updated_at' => '2020-02-04 15:47:12',
                'last_name' => 'test',
                'shipping_address' => NULL,
                'stripe_id' => NULL,
                'card_brand' => NULL,
                'card_last_four' => NULL,
                'trial_ends_at' => NULL,
                'billing_address' => NULL,
                'phone' => NULL,
            ),
            2 =>
            array (
                'id' => 3,
                //'role_id' => 2,
                'first_name' => 'test2',
                'email' => 'test2@mail.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$NRNqR27xGRCmIm2ebvntc.2170F0ioZGxgEXEK3Hap3.eV.cHmw9y',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2020-02-04 15:49:30',
                'updated_at' => '2020-02-04 15:49:30',
                'last_name' => 'test',
                'shipping_address' => NULL,
                'stripe_id' => NULL,
                'card_brand' => NULL,
                'card_last_four' => NULL,
                'trial_ends_at' => NULL,
                'billing_address' => NULL,
                'phone' => NULL,
            ),
            3 =>
            array (
                'id' => 4,
                //'role_id' => 2,
                'first_name' => 'test3',
                'email' => 'test3@mail.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$JT3PECbhCNf8hOOkH8cdYeZ40fajGhVJAYBiXk5OmjqPurUDFPYce',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2020-02-04 15:50:15',
                'updated_at' => '2020-02-04 15:50:15',
                'last_name' => 'test',
                'shipping_address' => NULL,
                'stripe_id' => NULL,
                'card_brand' => NULL,
                'card_last_four' => NULL,
                'trial_ends_at' => NULL,
                'billing_address' => NULL,
                'phone' => NULL,
            ),
            4 =>
            array (
                'id' => 5,
                //'role_id' => 2,
                'first_name' => 'Benjamin3',
                'email' => 'bregooding2@gmail.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$Mi8bk2dHobycqZ7dabtUZuB/YoCY2FL8tWKbanK5agrCOmUoPPQ..',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2020-02-04 15:53:53',
                'updated_at' => '2020-02-06 18:32:52',
                'last_name' => 'Gooding3',
                'shipping_address' => '15 Ashleigh Grove, West Jesmond, Newcastle upon Tyne, NE2 3DJ',
                'stripe_id' => NULL,
                'card_brand' => NULL,
                'card_last_four' => NULL,
                'trial_ends_at' => NULL,
                'billing_address' => NULL,
                'phone' => NULL,
            ),
        ));


    }
}
