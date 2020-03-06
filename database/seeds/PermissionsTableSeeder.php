<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'key' => 'browse_admin',
                'table_name' => NULL,
                'created_at' => '2019-12-02 16:28:07',
                'updated_at' => '2019-12-02 16:28:07',
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'browse_bread',
                'table_name' => NULL,
                'created_at' => '2019-12-02 16:28:07',
                'updated_at' => '2019-12-02 16:28:07',
            ),
            2 => 
            array (
                'id' => 3,
                'key' => 'browse_database',
                'table_name' => NULL,
                'created_at' => '2019-12-02 16:28:07',
                'updated_at' => '2019-12-02 16:28:07',
            ),
            3 => 
            array (
                'id' => 4,
                'key' => 'browse_media',
                'table_name' => NULL,
                'created_at' => '2019-12-02 16:28:07',
                'updated_at' => '2019-12-02 16:28:07',
            ),
            4 => 
            array (
                'id' => 5,
                'key' => 'browse_compass',
                'table_name' => NULL,
                'created_at' => '2019-12-02 16:28:07',
                'updated_at' => '2019-12-02 16:28:07',
            ),
            5 => 
            array (
                'id' => 6,
                'key' => 'browse_menus',
                'table_name' => 'menus',
                'created_at' => '2019-12-02 16:28:07',
                'updated_at' => '2019-12-02 16:28:07',
            ),
            6 => 
            array (
                'id' => 7,
                'key' => 'read_menus',
                'table_name' => 'menus',
                'created_at' => '2019-12-02 16:28:07',
                'updated_at' => '2019-12-02 16:28:07',
            ),
            7 => 
            array (
                'id' => 8,
                'key' => 'edit_menus',
                'table_name' => 'menus',
                'created_at' => '2019-12-02 16:28:07',
                'updated_at' => '2019-12-02 16:28:07',
            ),
            8 => 
            array (
                'id' => 9,
                'key' => 'add_menus',
                'table_name' => 'menus',
                'created_at' => '2019-12-02 16:28:07',
                'updated_at' => '2019-12-02 16:28:07',
            ),
            9 => 
            array (
                'id' => 10,
                'key' => 'delete_menus',
                'table_name' => 'menus',
                'created_at' => '2019-12-02 16:28:07',
                'updated_at' => '2019-12-02 16:28:07',
            ),
            10 => 
            array (
                'id' => 11,
                'key' => 'browse_roles',
                'table_name' => 'roles',
                'created_at' => '2019-12-02 16:28:07',
                'updated_at' => '2019-12-02 16:28:07',
            ),
            11 => 
            array (
                'id' => 12,
                'key' => 'read_roles',
                'table_name' => 'roles',
                'created_at' => '2019-12-02 16:28:07',
                'updated_at' => '2019-12-02 16:28:07',
            ),
            12 => 
            array (
                'id' => 13,
                'key' => 'edit_roles',
                'table_name' => 'roles',
                'created_at' => '2019-12-02 16:28:07',
                'updated_at' => '2019-12-02 16:28:07',
            ),
            13 => 
            array (
                'id' => 14,
                'key' => 'add_roles',
                'table_name' => 'roles',
                'created_at' => '2019-12-02 16:28:07',
                'updated_at' => '2019-12-02 16:28:07',
            ),
            14 => 
            array (
                'id' => 15,
                'key' => 'delete_roles',
                'table_name' => 'roles',
                'created_at' => '2019-12-02 16:28:07',
                'updated_at' => '2019-12-02 16:28:07',
            ),
            15 => 
            array (
                'id' => 16,
                'key' => 'browse_users',
                'table_name' => 'users',
                'created_at' => '2019-12-02 16:28:07',
                'updated_at' => '2019-12-02 16:28:07',
            ),
            16 => 
            array (
                'id' => 17,
                'key' => 'read_users',
                'table_name' => 'users',
                'created_at' => '2019-12-02 16:28:07',
                'updated_at' => '2019-12-02 16:28:07',
            ),
            17 => 
            array (
                'id' => 18,
                'key' => 'edit_users',
                'table_name' => 'users',
                'created_at' => '2019-12-02 16:28:07',
                'updated_at' => '2019-12-02 16:28:07',
            ),
            18 => 
            array (
                'id' => 19,
                'key' => 'add_users',
                'table_name' => 'users',
                'created_at' => '2019-12-02 16:28:08',
                'updated_at' => '2019-12-02 16:28:08',
            ),
            19 => 
            array (
                'id' => 20,
                'key' => 'delete_users',
                'table_name' => 'users',
                'created_at' => '2019-12-02 16:28:08',
                'updated_at' => '2019-12-02 16:28:08',
            ),
            20 => 
            array (
                'id' => 21,
                'key' => 'browse_settings',
                'table_name' => 'settings',
                'created_at' => '2019-12-02 16:28:08',
                'updated_at' => '2019-12-02 16:28:08',
            ),
            21 => 
            array (
                'id' => 22,
                'key' => 'read_settings',
                'table_name' => 'settings',
                'created_at' => '2019-12-02 16:28:08',
                'updated_at' => '2019-12-02 16:28:08',
            ),
            22 => 
            array (
                'id' => 23,
                'key' => 'edit_settings',
                'table_name' => 'settings',
                'created_at' => '2019-12-02 16:28:08',
                'updated_at' => '2019-12-02 16:28:08',
            ),
            23 => 
            array (
                'id' => 24,
                'key' => 'add_settings',
                'table_name' => 'settings',
                'created_at' => '2019-12-02 16:28:08',
                'updated_at' => '2019-12-02 16:28:08',
            ),
            24 => 
            array (
                'id' => 25,
                'key' => 'delete_settings',
                'table_name' => 'settings',
                'created_at' => '2019-12-02 16:28:08',
                'updated_at' => '2019-12-02 16:28:08',
            ),
            25 => 
            array (
                'id' => 26,
                'key' => 'browse_categories',
                'table_name' => 'categories',
                'created_at' => '2019-12-02 16:28:15',
                'updated_at' => '2019-12-02 16:28:15',
            ),
            26 => 
            array (
                'id' => 27,
                'key' => 'read_categories',
                'table_name' => 'categories',
                'created_at' => '2019-12-02 16:28:15',
                'updated_at' => '2019-12-02 16:28:15',
            ),
            27 => 
            array (
                'id' => 28,
                'key' => 'edit_categories',
                'table_name' => 'categories',
                'created_at' => '2019-12-02 16:28:15',
                'updated_at' => '2019-12-02 16:28:15',
            ),
            28 => 
            array (
                'id' => 29,
                'key' => 'add_categories',
                'table_name' => 'categories',
                'created_at' => '2019-12-02 16:28:15',
                'updated_at' => '2019-12-02 16:28:15',
            ),
            29 => 
            array (
                'id' => 30,
                'key' => 'delete_categories',
                'table_name' => 'categories',
                'created_at' => '2019-12-02 16:28:15',
                'updated_at' => '2019-12-02 16:28:15',
            ),
            30 => 
            array (
                'id' => 31,
                'key' => 'browse_posts',
                'table_name' => 'posts',
                'created_at' => '2019-12-02 16:28:16',
                'updated_at' => '2019-12-02 16:28:16',
            ),
            31 => 
            array (
                'id' => 32,
                'key' => 'read_posts',
                'table_name' => 'posts',
                'created_at' => '2019-12-02 16:28:16',
                'updated_at' => '2019-12-02 16:28:16',
            ),
            32 => 
            array (
                'id' => 33,
                'key' => 'edit_posts',
                'table_name' => 'posts',
                'created_at' => '2019-12-02 16:28:16',
                'updated_at' => '2019-12-02 16:28:16',
            ),
            33 => 
            array (
                'id' => 34,
                'key' => 'add_posts',
                'table_name' => 'posts',
                'created_at' => '2019-12-02 16:28:16',
                'updated_at' => '2019-12-02 16:28:16',
            ),
            34 => 
            array (
                'id' => 35,
                'key' => 'delete_posts',
                'table_name' => 'posts',
                'created_at' => '2019-12-02 16:28:16',
                'updated_at' => '2019-12-02 16:28:16',
            ),
            35 => 
            array (
                'id' => 36,
                'key' => 'browse_pages',
                'table_name' => 'pages',
                'created_at' => '2019-12-02 16:28:17',
                'updated_at' => '2019-12-02 16:28:17',
            ),
            36 => 
            array (
                'id' => 37,
                'key' => 'read_pages',
                'table_name' => 'pages',
                'created_at' => '2019-12-02 16:28:17',
                'updated_at' => '2019-12-02 16:28:17',
            ),
            37 => 
            array (
                'id' => 38,
                'key' => 'edit_pages',
                'table_name' => 'pages',
                'created_at' => '2019-12-02 16:28:17',
                'updated_at' => '2019-12-02 16:28:17',
            ),
            38 => 
            array (
                'id' => 39,
                'key' => 'add_pages',
                'table_name' => 'pages',
                'created_at' => '2019-12-02 16:28:17',
                'updated_at' => '2019-12-02 16:28:17',
            ),
            39 => 
            array (
                'id' => 40,
                'key' => 'delete_pages',
                'table_name' => 'pages',
                'created_at' => '2019-12-02 16:28:17',
                'updated_at' => '2019-12-02 16:28:17',
            ),
            40 => 
            array (
                'id' => 41,
                'key' => 'browse_hooks',
                'table_name' => NULL,
                'created_at' => '2019-12-02 16:28:20',
                'updated_at' => '2019-12-02 16:28:20',
            ),
            41 => 
            array (
                'id' => 42,
                'key' => 'browse_home_page_slider',
                'table_name' => 'home_page_slider',
                'created_at' => '2019-12-04 18:23:17',
                'updated_at' => '2019-12-04 18:23:17',
            ),
            42 => 
            array (
                'id' => 43,
                'key' => 'read_home_page_slider',
                'table_name' => 'home_page_slider',
                'created_at' => '2019-12-04 18:23:17',
                'updated_at' => '2019-12-04 18:23:17',
            ),
            43 => 
            array (
                'id' => 44,
                'key' => 'edit_home_page_slider',
                'table_name' => 'home_page_slider',
                'created_at' => '2019-12-04 18:23:17',
                'updated_at' => '2019-12-04 18:23:17',
            ),
            44 => 
            array (
                'id' => 45,
                'key' => 'add_home_page_slider',
                'table_name' => 'home_page_slider',
                'created_at' => '2019-12-04 18:23:17',
                'updated_at' => '2019-12-04 18:23:17',
            ),
            45 => 
            array (
                'id' => 46,
                'key' => 'delete_home_page_slider',
                'table_name' => 'home_page_slider',
                'created_at' => '2019-12-04 18:23:17',
                'updated_at' => '2019-12-04 18:23:17',
            ),
            46 => 
            array (
                'id' => 47,
                'key' => 'browse_home_page_sliders',
                'table_name' => 'home_page_sliders',
                'created_at' => '2019-12-04 18:28:43',
                'updated_at' => '2019-12-04 18:28:43',
            ),
            47 => 
            array (
                'id' => 48,
                'key' => 'read_home_page_sliders',
                'table_name' => 'home_page_sliders',
                'created_at' => '2019-12-04 18:28:43',
                'updated_at' => '2019-12-04 18:28:43',
            ),
            48 => 
            array (
                'id' => 49,
                'key' => 'edit_home_page_sliders',
                'table_name' => 'home_page_sliders',
                'created_at' => '2019-12-04 18:28:43',
                'updated_at' => '2019-12-04 18:28:43',
            ),
            49 => 
            array (
                'id' => 50,
                'key' => 'add_home_page_sliders',
                'table_name' => 'home_page_sliders',
                'created_at' => '2019-12-04 18:28:43',
                'updated_at' => '2019-12-04 18:28:43',
            ),
            50 => 
            array (
                'id' => 51,
                'key' => 'delete_home_page_sliders',
                'table_name' => 'home_page_sliders',
                'created_at' => '2019-12-04 18:28:43',
                'updated_at' => '2019-12-04 18:28:43',
            ),
            51 => 
            array (
                'id' => 52,
                'key' => 'browse_products',
                'table_name' => 'products',
                'created_at' => '2019-12-06 17:01:34',
                'updated_at' => '2019-12-06 17:01:34',
            ),
            52 => 
            array (
                'id' => 53,
                'key' => 'read_products',
                'table_name' => 'products',
                'created_at' => '2019-12-06 17:01:34',
                'updated_at' => '2019-12-06 17:01:34',
            ),
            53 => 
            array (
                'id' => 54,
                'key' => 'edit_products',
                'table_name' => 'products',
                'created_at' => '2019-12-06 17:01:34',
                'updated_at' => '2019-12-06 17:01:34',
            ),
            54 => 
            array (
                'id' => 55,
                'key' => 'add_products',
                'table_name' => 'products',
                'created_at' => '2019-12-06 17:01:34',
                'updated_at' => '2019-12-06 17:01:34',
            ),
            55 => 
            array (
                'id' => 56,
                'key' => 'delete_products',
                'table_name' => 'products',
                'created_at' => '2019-12-06 17:01:34',
                'updated_at' => '2019-12-06 17:01:34',
            ),
            56 => 
            array (
                'id' => 57,
                'key' => 'browse_shop_categories',
                'table_name' => 'shop_categories',
                'created_at' => '2019-12-06 17:12:21',
                'updated_at' => '2019-12-06 17:12:21',
            ),
            57 => 
            array (
                'id' => 58,
                'key' => 'read_shop_categories',
                'table_name' => 'shop_categories',
                'created_at' => '2019-12-06 17:12:21',
                'updated_at' => '2019-12-06 17:12:21',
            ),
            58 => 
            array (
                'id' => 59,
                'key' => 'edit_shop_categories',
                'table_name' => 'shop_categories',
                'created_at' => '2019-12-06 17:12:21',
                'updated_at' => '2019-12-06 17:12:21',
            ),
            59 => 
            array (
                'id' => 60,
                'key' => 'add_shop_categories',
                'table_name' => 'shop_categories',
                'created_at' => '2019-12-06 17:12:21',
                'updated_at' => '2019-12-06 17:12:21',
            ),
            60 => 
            array (
                'id' => 61,
                'key' => 'delete_shop_categories',
                'table_name' => 'shop_categories',
                'created_at' => '2019-12-06 17:12:21',
                'updated_at' => '2019-12-06 17:12:21',
            ),
            61 => 
            array (
                'id' => 62,
                'key' => 'browse_product_images',
                'table_name' => 'product_images',
                'created_at' => '2019-12-06 17:41:57',
                'updated_at' => '2019-12-06 17:41:57',
            ),
            62 => 
            array (
                'id' => 63,
                'key' => 'read_product_images',
                'table_name' => 'product_images',
                'created_at' => '2019-12-06 17:41:57',
                'updated_at' => '2019-12-06 17:41:57',
            ),
            63 => 
            array (
                'id' => 64,
                'key' => 'edit_product_images',
                'table_name' => 'product_images',
                'created_at' => '2019-12-06 17:41:57',
                'updated_at' => '2019-12-06 17:41:57',
            ),
            64 => 
            array (
                'id' => 65,
                'key' => 'add_product_images',
                'table_name' => 'product_images',
                'created_at' => '2019-12-06 17:41:57',
                'updated_at' => '2019-12-06 17:41:57',
            ),
            65 => 
            array (
                'id' => 66,
                'key' => 'delete_product_images',
                'table_name' => 'product_images',
                'created_at' => '2019-12-06 17:41:57',
                'updated_at' => '2019-12-06 17:41:57',
            ),
            66 => 
            array (
                'id' => 67,
                'key' => 'browse_features',
                'table_name' => 'features',
                'created_at' => '2019-12-06 18:24:26',
                'updated_at' => '2019-12-06 18:24:26',
            ),
            67 => 
            array (
                'id' => 68,
                'key' => 'read_features',
                'table_name' => 'features',
                'created_at' => '2019-12-06 18:24:26',
                'updated_at' => '2019-12-06 18:24:26',
            ),
            68 => 
            array (
                'id' => 69,
                'key' => 'edit_features',
                'table_name' => 'features',
                'created_at' => '2019-12-06 18:24:26',
                'updated_at' => '2019-12-06 18:24:26',
            ),
            69 => 
            array (
                'id' => 70,
                'key' => 'add_features',
                'table_name' => 'features',
                'created_at' => '2019-12-06 18:24:26',
                'updated_at' => '2019-12-06 18:24:26',
            ),
            70 => 
            array (
                'id' => 71,
                'key' => 'delete_features',
                'table_name' => 'features',
                'created_at' => '2019-12-06 18:24:26',
                'updated_at' => '2019-12-06 18:24:26',
            ),
            71 => 
            array (
                'id' => 72,
                'key' => 'browse_options',
                'table_name' => 'options',
                'created_at' => '2019-12-10 16:22:16',
                'updated_at' => '2019-12-10 16:22:16',
            ),
            72 => 
            array (
                'id' => 73,
                'key' => 'read_options',
                'table_name' => 'options',
                'created_at' => '2019-12-10 16:22:16',
                'updated_at' => '2019-12-10 16:22:16',
            ),
            73 => 
            array (
                'id' => 74,
                'key' => 'edit_options',
                'table_name' => 'options',
                'created_at' => '2019-12-10 16:22:16',
                'updated_at' => '2019-12-10 16:22:16',
            ),
            74 => 
            array (
                'id' => 75,
                'key' => 'add_options',
                'table_name' => 'options',
                'created_at' => '2019-12-10 16:22:16',
                'updated_at' => '2019-12-10 16:22:16',
            ),
            75 => 
            array (
                'id' => 76,
                'key' => 'delete_options',
                'table_name' => 'options',
                'created_at' => '2019-12-10 16:22:16',
                'updated_at' => '2019-12-10 16:22:16',
            ),
            76 => 
            array (
                'id' => 77,
                'key' => 'browse_groups',
                'table_name' => 'groups',
                'created_at' => '2019-12-10 17:31:18',
                'updated_at' => '2019-12-10 17:31:18',
            ),
            77 => 
            array (
                'id' => 78,
                'key' => 'read_groups',
                'table_name' => 'groups',
                'created_at' => '2019-12-10 17:31:18',
                'updated_at' => '2019-12-10 17:31:18',
            ),
            78 => 
            array (
                'id' => 79,
                'key' => 'edit_groups',
                'table_name' => 'groups',
                'created_at' => '2019-12-10 17:31:18',
                'updated_at' => '2019-12-10 17:31:18',
            ),
            79 => 
            array (
                'id' => 80,
                'key' => 'add_groups',
                'table_name' => 'groups',
                'created_at' => '2019-12-10 17:31:18',
                'updated_at' => '2019-12-10 17:31:18',
            ),
            80 => 
            array (
                'id' => 81,
                'key' => 'delete_groups',
                'table_name' => 'groups',
                'created_at' => '2019-12-10 17:31:18',
                'updated_at' => '2019-12-10 17:31:18',
            ),
            81 => 
            array (
                'id' => 82,
                'key' => 'browse_reviews',
                'table_name' => 'reviews',
                'created_at' => '2019-12-18 16:12:57',
                'updated_at' => '2019-12-18 16:12:57',
            ),
            82 => 
            array (
                'id' => 83,
                'key' => 'read_reviews',
                'table_name' => 'reviews',
                'created_at' => '2019-12-18 16:12:57',
                'updated_at' => '2019-12-18 16:12:57',
            ),
            83 => 
            array (
                'id' => 84,
                'key' => 'edit_reviews',
                'table_name' => 'reviews',
                'created_at' => '2019-12-18 16:12:57',
                'updated_at' => '2019-12-18 16:12:57',
            ),
            84 => 
            array (
                'id' => 85,
                'key' => 'add_reviews',
                'table_name' => 'reviews',
                'created_at' => '2019-12-18 16:12:57',
                'updated_at' => '2019-12-18 16:12:57',
            ),
            85 => 
            array (
                'id' => 86,
                'key' => 'delete_reviews',
                'table_name' => 'reviews',
                'created_at' => '2019-12-18 16:12:57',
                'updated_at' => '2019-12-18 16:12:57',
            ),
            86 => 
            array (
                'id' => 92,
                'key' => 'browse_order_products',
                'table_name' => 'order_products',
                'created_at' => '2020-02-04 17:01:09',
                'updated_at' => '2020-02-04 17:01:09',
            ),
            87 => 
            array (
                'id' => 93,
                'key' => 'read_order_products',
                'table_name' => 'order_products',
                'created_at' => '2020-02-04 17:01:09',
                'updated_at' => '2020-02-04 17:01:09',
            ),
            88 => 
            array (
                'id' => 94,
                'key' => 'edit_order_products',
                'table_name' => 'order_products',
                'created_at' => '2020-02-04 17:01:09',
                'updated_at' => '2020-02-04 17:01:09',
            ),
            89 => 
            array (
                'id' => 95,
                'key' => 'add_order_products',
                'table_name' => 'order_products',
                'created_at' => '2020-02-04 17:01:09',
                'updated_at' => '2020-02-04 17:01:09',
            ),
            90 => 
            array (
                'id' => 96,
                'key' => 'delete_order_products',
                'table_name' => 'order_products',
                'created_at' => '2020-02-04 17:01:09',
                'updated_at' => '2020-02-04 17:01:09',
            ),
            91 => 
            array (
                'id' => 97,
                'key' => 'browse_discount',
                'table_name' => 'discount',
                'created_at' => '2020-02-17 13:25:12',
                'updated_at' => '2020-02-17 13:25:12',
            ),
            92 => 
            array (
                'id' => 98,
                'key' => 'read_discount',
                'table_name' => 'discount',
                'created_at' => '2020-02-17 13:25:12',
                'updated_at' => '2020-02-17 13:25:12',
            ),
            93 => 
            array (
                'id' => 99,
                'key' => 'edit_discount',
                'table_name' => 'discount',
                'created_at' => '2020-02-17 13:25:12',
                'updated_at' => '2020-02-17 13:25:12',
            ),
            94 => 
            array (
                'id' => 100,
                'key' => 'add_discount',
                'table_name' => 'discount',
                'created_at' => '2020-02-17 13:25:12',
                'updated_at' => '2020-02-17 13:25:12',
            ),
            95 => 
            array (
                'id' => 101,
                'key' => 'delete_discount',
                'table_name' => 'discount',
                'created_at' => '2020-02-17 13:25:12',
                'updated_at' => '2020-02-17 13:25:12',
            ),
            96 => 
            array (
                'id' => 102,
                'key' => 'browse_basket_items',
                'table_name' => 'basket_items',
                'created_at' => '2020-02-18 16:19:12',
                'updated_at' => '2020-02-18 16:19:12',
            ),
            97 => 
            array (
                'id' => 103,
                'key' => 'read_basket_items',
                'table_name' => 'basket_items',
                'created_at' => '2020-02-18 16:19:12',
                'updated_at' => '2020-02-18 16:19:12',
            ),
            98 => 
            array (
                'id' => 104,
                'key' => 'edit_basket_items',
                'table_name' => 'basket_items',
                'created_at' => '2020-02-18 16:19:12',
                'updated_at' => '2020-02-18 16:19:12',
            ),
            99 => 
            array (
                'id' => 105,
                'key' => 'add_basket_items',
                'table_name' => 'basket_items',
                'created_at' => '2020-02-18 16:19:12',
                'updated_at' => '2020-02-18 16:19:12',
            ),
            100 => 
            array (
                'id' => 106,
                'key' => 'delete_basket_items',
                'table_name' => 'basket_items',
                'created_at' => '2020-02-18 16:19:12',
                'updated_at' => '2020-02-18 16:19:12',
            ),
        ));
        
        
    }
}