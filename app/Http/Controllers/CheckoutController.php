<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    //
    public function index(){
        return view('checkout');
        }
        public function store(Request $request){
            dd('saveorder and redirect');
        }
}
