<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Product::create([
            'name'=>'sandwich',
            'slug'=>'sandwich',
            'description'=>'this best sandich',
            'image_name'=>'burger.png',
            'price'=>'15',
            'sale_price'=>'12',
            'restaurant_id'=>'1',





        ]);
        Product::create([
            'name'=>'beurger',
            'slug'=>'beurger',
            'description'=>'this best beurger',
            'image_name'=>'burger.png',
            'price'=>'15',
            'sale_price'=>'12',
            'restaurant_id'=>'1',





        ]);
        Product::create([
            'name'=>'banini',
            'slug'=>'banini',
            'description'=>'this best banini',
            'image_name'=>'burger.png',
            'price'=>'15',
            'sale_price'=>'12',
            'restaurant_id'=>'1',





        ]);
        Product::create([
            'name'=>'salad',
            'slug'=>'salad',
            'description'=>'this best salad',
            'image_name'=>'burger.png',
            'price'=>'15',
            'sale_price'=>'12',
            'restaurant_id'=>'1',





        ]);
    }
  
}
