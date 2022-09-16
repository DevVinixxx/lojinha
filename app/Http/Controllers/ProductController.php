<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index(){

        $products = Product::all();

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

        return view('products.product')->with('product', $product);

    }

    public function store(Request $request)
    {
        // Define o valor default para a variável que contém o nome da imagem 
        $nameFile = null;
    
        // Verifica se informou o arquivo e se é válido
        if ($request->hasFile('capa') && $request->file('capa')->isValid()) {
            
            // Define um aleatório para o arquivo baseado no timestamps atual
            $name = uniqid(date('HisYmd'));
    
            // Recupera a extensão do arquivo
            $extension = $request->capa->extension();
    
            // Define finalmente o nome
            $nameFile = "{$name}.{$extension}";
    
            // Faz o upload:
            $upload = $request->capa->storeAs('capa', $nameFile);
            // Se tiver funcionado o arquivo foi armazenado em storage/app/public/categories/nomedinamicoarquivo.extensao

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
            $product->capa = $upload;

            $product->save();

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
