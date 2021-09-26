<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;



class ProductController extends Controller
{
    //
    public function index(Request $request){
  $restaurant = Restaurant::where('slug',$request->slug)->first();
 
      return view('products',[
       "products"=>$restaurant->products,
       "restaurant"=>$restaurant,

      ]);
    }
}
