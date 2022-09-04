<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Products;
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

    public function show(){

        return view('products.product');

    }

    public function cart()
    {
        return view('products.cart');
    }
}
