<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $product = new Product;
        $product->title = $request->title;
        $product->category = $request->category;
        $product->description = $request->description;
        $product->amount = $request->amount;
        $product->qtd = $request->qtd;
        $product->status = $request->status;
        $product->save();

        return view('products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}