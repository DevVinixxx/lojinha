<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index(){
        
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
        $product->amount = $request->amount;
        $product->qtd = $request->qtd;
        $product->status = $request->status;

        //upload de imagem
        if($request->hasFile('img') && $request->file('img')->isValid()){
            
            $image = $request->img;

            $extension = $image->extension();

            $imageName = md5($image->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $image->move(public_path('img/products'), $imageName);

            $product->img = $imageName;

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
