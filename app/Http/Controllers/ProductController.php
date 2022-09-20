<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index(){

        $products = Product::all();

        //dd($products);
        return view('products.index')->with('products',$products);

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

    public function show($id){
        
        $product = Product::findOrFail($id);

        $prodimages = Image::where('product_id')->first();

        return view('products.product', [
            'product'=> $product,
            'prodimages' => $prodimages
        ]);
    }

    public function store(Request $request)
    {
        if($request->hasFile("capa")){

           $file = $request->capa->store('capa');

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
            $product->capa = $file;

            $product->save();
        }

        if($request->hasFile("images")){
            $files=$request->file("images");
            foreach($files as $file){
                $imageName=time().'_'.$file->getClientOriginalName();
                $request['product_id']=$product->id;
                $request['image']=$imageName;
                $file->move(\public_path("/prods"),$imageName);
                Image::create($request->all());
            }
        }

        return redirect()->route('products');
    
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
