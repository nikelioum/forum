<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shop;

class ShopsController extends Controller
{
    //Katastimata page
    public function index(){

        $shops = Shop::all();

        return view('front.katastimata', compact('shops'));
    }

    //Katastima page
    public function shop($slug){

        $shop = Shop::where('slug', $slug)->first();

        return view('front.katastima', compact('shop'));
    }
}
