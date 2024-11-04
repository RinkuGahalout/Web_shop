<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'clothes',
                'price' => '2000',
                'category' => 'Fashion',
                'gallery' => 'https://photos.peopleimages.com/picture/202301/2588012-black-couple-smile-and-casual-fashion-standing-in-urban-town-wall-background-for-conversation-peace-and-relax-together.-cool-man-trendy-woman-and-happy-speaking-for-gen-z-millennial-street-style--fit_400_400.jpg',
                'description' => 'A smartphone is a versatile handheld device combining the functionality of a mobile phone with a range of advanced computing features.'
            ],
            [
                'name' => 'fridge',
                'price' => '50000',
                'category' => 'Electronic',
                'gallery' => 'https://images-cdn.ubuy.co.in/65979c2cb910f53d2e6e34ae-3-5cu-ft-compact-refrigerator-mini.jpg',
                'description' => 'A refrigerator, or fridge, is an essential kitchen appliance designed to keep food and beverages cold, slowing bacterial growth to extend freshness and safety. It typically has insulated walls, one or more doors, and adjustable shelves to organize items. Most fridges feature a main refrigeration'
            ],
            [
                'name' => 'Home blanket',
                'price' => '20000',
                'category' => 'Home',
                'gallery' => 'https://www.loomkart.com/cdn/shop/products/201_c982e867-6315-4f7c-8ab2-022fbae87833.jpg',
                'description' => 'A blanket is a large, soft fabric piece designed to provide warmth and comfort, commonly used on beds or couches. Blankets come in various materials, including cotton, wool, fleece, and synthetic fibers.'
            ],
            [
                'name' => 'sofaset',
                'price' => '150000',
                'category' => 'Furniture',
                'gallery' => 'https://m.media-amazon.com/images/I/61pIjY7HISL.jpg',
                'description' => 'A sofa set is a coordinated seating arrangement designed for living rooms, family rooms, or lounges, usually consisting of a main sofa and accompanying pieces like armchairs or a loveseat. Sofa sets are available in various styles.'
            ],
        ]);
    }
}
