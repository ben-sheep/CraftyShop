<?php

use Illuminate\Database\Seeder;

class MenuItemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menu_items')->delete();
        
        \DB::table('menu_items')->insert(array (
            0 => 
            array (
                'id' => 1,
                'menu_id' => 1,
                'title' => 'Dashboard',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-boat',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 1,
                'created_at' => '2019-12-02 16:28:06',
                'updated_at' => '2019-12-02 16:28:06',
                'route' => 'voyager.dashboard',
                'parameters' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'menu_id' => 1,
                'title' => 'Media',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-images',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 3,
                'created_at' => '2019-12-02 16:28:06',
                'updated_at' => '2019-12-11 16:01:14',
                'route' => 'voyager.media.index',
                'parameters' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'menu_id' => 1,
                'title' => 'Users',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-person',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 2,
                'created_at' => '2019-12-02 16:28:06',
                'updated_at' => '2019-12-11 16:01:13',
                'route' => 'voyager.users.index',
                'parameters' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'menu_id' => 1,
                'title' => 'Roles',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-lock',
                'color' => NULL,
                'parent_id' => 3,
                'order' => 1,
                'created_at' => '2019-12-02 16:28:06',
                'updated_at' => '2019-12-11 16:01:14',
                'route' => 'voyager.roles.index',
                'parameters' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'menu_id' => 1,
                'title' => 'Tools',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-tools',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 5,
                'created_at' => '2019-12-02 16:28:06',
                'updated_at' => '2019-12-11 16:01:14',
                'route' => NULL,
                'parameters' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'menu_id' => 1,
                'title' => 'Menu Builder',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-list',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 1,
                'created_at' => '2019-12-02 16:28:06',
                'updated_at' => '2019-12-11 16:00:18',
                'route' => 'voyager.menus.index',
                'parameters' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'menu_id' => 1,
                'title' => 'Database',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-data',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 2,
                'created_at' => '2019-12-02 16:28:06',
                'updated_at' => '2019-12-11 16:00:18',
                'route' => 'voyager.database.index',
                'parameters' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'menu_id' => 1,
                'title' => 'Compass',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-compass',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 3,
                'created_at' => '2019-12-02 16:28:06',
                'updated_at' => '2019-12-11 16:00:18',
                'route' => 'voyager.compass.index',
                'parameters' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'menu_id' => 1,
                'title' => 'BREAD',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-bread',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 4,
                'created_at' => '2019-12-02 16:28:06',
                'updated_at' => '2019-12-11 16:00:18',
                'route' => 'voyager.bread.index',
                'parameters' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'menu_id' => 1,
                'title' => 'Settings',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-settings',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 6,
                'created_at' => '2019-12-02 16:28:06',
                'updated_at' => '2019-12-11 16:01:14',
                'route' => 'voyager.settings.index',
                'parameters' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'menu_id' => 1,
                'title' => 'Categories',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-categories',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 4,
                'created_at' => '2019-12-02 16:28:15',
                'updated_at' => '2019-12-11 16:01:14',
                'route' => 'voyager.categories.index',
                'parameters' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'menu_id' => 1,
                'title' => 'Posts',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-news',
                'color' => NULL,
                'parent_id' => 11,
                'order' => 1,
                'created_at' => '2019-12-02 16:28:16',
                'updated_at' => '2019-12-11 16:01:01',
                'route' => 'voyager.posts.index',
                'parameters' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'menu_id' => 1,
                'title' => 'Pages',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-file-text',
                'color' => NULL,
                'parent_id' => 11,
                'order' => 2,
                'created_at' => '2019-12-02 16:28:17',
                'updated_at' => '2019-12-11 16:01:03',
                'route' => 'voyager.pages.index',
                'parameters' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'menu_id' => 1,
                'title' => 'Hooks',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-hook',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 5,
                'created_at' => '2019-12-02 16:28:20',
                'updated_at' => '2019-12-11 16:00:18',
                'route' => 'voyager.hooks',
                'parameters' => NULL,
            ),
            14 => 
            array (
                'id' => 16,
                'menu_id' => 1,
                'title' => 'Home Page Sliders',
                'url' => '',
                'target' => '_self',
                'icon_class' => NULL,
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 8,
                'created_at' => '2019-12-04 18:28:43',
                'updated_at' => '2019-12-11 16:02:44',
                'route' => 'voyager.home-page-sliders.index',
                'parameters' => NULL,
            ),
            15 => 
            array (
                'id' => 17,
                'menu_id' => 1,
                'title' => 'Products',
                'url' => '',
                'target' => '_self',
                'icon_class' => NULL,
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 9,
                'created_at' => '2019-12-06 17:01:34',
                'updated_at' => '2019-12-11 16:02:44',
                'route' => 'voyager.products.index',
                'parameters' => NULL,
            ),
            16 => 
            array (
                'id' => 18,
                'menu_id' => 1,
                'title' => 'Shop Categories',
                'url' => '',
                'target' => '_self',
                'icon_class' => NULL,
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 13,
                'created_at' => '2019-12-06 17:12:22',
                'updated_at' => '2019-12-11 16:02:44',
                'route' => 'voyager.shop-categories.index',
                'parameters' => NULL,
            ),
            17 => 
            array (
                'id' => 19,
                'menu_id' => 1,
                'title' => 'Product Images',
                'url' => '',
                'target' => '_self',
                'icon_class' => NULL,
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 10,
                'created_at' => '2019-12-06 17:41:57',
                'updated_at' => '2019-12-11 16:02:44',
                'route' => 'voyager.product-images.index',
                'parameters' => NULL,
            ),
            18 => 
            array (
                'id' => 20,
                'menu_id' => 1,
                'title' => 'Features',
                'url' => '',
                'target' => '_self',
                'icon_class' => NULL,
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 7,
                'created_at' => '2019-12-06 18:24:27',
                'updated_at' => '2019-12-11 16:01:47',
                'route' => 'voyager.features.index',
                'parameters' => NULL,
            ),
            19 => 
            array (
                'id' => 21,
                'menu_id' => 1,
                'title' => 'Options',
                'url' => '',
                'target' => '_self',
                'icon_class' => NULL,
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 11,
                'created_at' => '2019-12-10 16:22:17',
                'updated_at' => '2019-12-11 16:02:44',
                'route' => 'voyager.options.index',
                'parameters' => NULL,
            ),
            20 => 
            array (
                'id' => 22,
                'menu_id' => 1,
                'title' => 'Groups',
                'url' => '',
                'target' => '_self',
                'icon_class' => NULL,
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 12,
                'created_at' => '2019-12-10 17:31:18',
                'updated_at' => '2019-12-11 16:02:44',
                'route' => 'voyager.groups.index',
                'parameters' => NULL,
            ),
            21 => 
            array (
                'id' => 23,
                'menu_id' => 1,
                'title' => 'Reviews',
                'url' => '',
                'target' => '_self',
                'icon_class' => NULL,
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 14,
                'created_at' => '2019-12-18 16:12:57',
                'updated_at' => '2019-12-18 16:12:57',
                'route' => 'voyager.reviews.index',
                'parameters' => NULL,
            ),
            22 => 
            array (
                'id' => 25,
                'menu_id' => 1,
                'title' => 'Order Products',
                'url' => '',
                'target' => '_self',
                'icon_class' => NULL,
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 16,
                'created_at' => '2020-02-04 17:01:10',
                'updated_at' => '2020-02-04 17:01:10',
                'route' => 'voyager.order-products.index',
                'parameters' => NULL,
            ),
            23 => 
            array (
                'id' => 26,
                'menu_id' => 1,
                'title' => 'Discounts',
                'url' => '',
                'target' => '_self',
                'icon_class' => NULL,
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 17,
                'created_at' => '2020-02-17 13:25:13',
                'updated_at' => '2020-02-17 13:25:13',
                'route' => 'voyager.discount.index',
                'parameters' => NULL,
            ),
            24 => 
            array (
                'id' => 27,
                'menu_id' => 1,
                'title' => 'Basket Items',
                'url' => '',
                'target' => '_self',
                'icon_class' => NULL,
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 18,
                'created_at' => '2020-02-18 16:19:12',
                'updated_at' => '2020-02-18 16:19:12',
                'route' => 'voyager.basket-items.index',
                'parameters' => NULL,
            ),
        ));
        
        
    }
}