<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Products;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('home.index', ['products' => $products]);
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

    public function productid($id)
    {
        $product = Product::where('id', $id)->first();

        return view('products.product',['product'=>$product]);

        
    }

    public function cart()
    {
        return view('products.cart');
    }
}
