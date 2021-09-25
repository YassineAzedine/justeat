<?php

namespace Database\Seeders;
use App\Models\Restaurant;

use Illuminate\Database\Seeder;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Restaurant::create(
            [
                'name'=> 'baco',
                'slug'=> 'baco',
                'lat'=> 35.4620,
                'lng'=> -5.4620,
                'image_name'=> 'baco.jpg',
                'adress'=> 'bacohotelcalrifornia',
                'postcode'=> 'M15 JJS',



            ]
            );
            Restaurant::create(
                [
                    'name'=> 'maiano',
                    'slug'=> 'maiano',
                    'lat'=> 33.4620,
                    'lng'=> -3.4620,
                    'image_name'=> 'bacod.jpg',
                    'adress'=> 'bacohokktelcalrifornia',
                    'postcode'=> 'M15 JJS',
    
    
    
                ]
                );

    }
  
}
