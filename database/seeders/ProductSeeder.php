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
    }
  
}
