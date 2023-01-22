<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shop;
use App\Models\Category;
use App\Models\User;

class PagesController extends Controller
{
    //Index page
    public function index(){

        $latest_shops = Shop::take(3)->get();
        $count_categories = Category::count();
        $count_users = User::where('role_id', 2)->count();
        $latest_users = User::where('role_id', 2)->orderBy('created_at', 'DESC')->take(5)->get();

        return view('front.index', compact('latest_shops', 'count_categories', 'count_users', 'latest_users'));
    }

    //Reviews page
    public function reviews(){
        return view('front.reviews');
    }

    //Aggelies page
    public function aggelies(){
        return view('front.aggelies');
    }

    //Epikoinonia page
    public function epikoinonia(){
        return view ('front.epikoinonia');
    }
}
