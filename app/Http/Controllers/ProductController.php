<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index(){

        return view('products.index');
    }

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
        $product->color = $request->color;
        $product->brand = $request->brand;
        $product->size = $request->size;
        $product->particulars = $request->particulars;
        $product->amount = $request->amount;
        $product->qtd = $request->qtd;
        $product->status = $request->status;
        //upload de imagem
        if($request->hasFile('image') && $request->file('image')->isValid()){
           
            $image = $request->image->store('img/products');

            $product->image = $image;
        }

        $product->save();

        return redirect()->route('products');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('index');
    }
}
