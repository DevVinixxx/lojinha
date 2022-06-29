<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        return view('home.index');
    }

    public function about()
    {
        return view('about.index');
    }

    public function contact()
    {
        return view('contact.index');
    }

    public function products()
    {
        return view('products.index');
    }

    public function product()
    {
        return view('products.product');
    }
}
