<?php

namespace App\Http\Controllers;

use \App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public $category;
    public function listar()
    {
   $products = Product::all();
    return view('product-list', compact('products'));
    }
   
    public function formProduto()
    {   $categories = \App\Models\Category::all();
        return view('CriarProduto',['categories' => $categories]);
    }

    public function criarProduto(Request $request)
    {
          Product::create([
            'name'=> $request->name,
            'slug' => $request->slug,
            'description'=> $request->description,
            'category_id'=> $request->category_id,
            'price' => $request -> price,
            'uuid' => Str::uuid(),
        ]);
            return redirect('products/list');
        
    }


    public function editarProduto($id){
        $product = Product::findOrFail($id);
        $categories = \App\Models\Category::all();
        return view('editarProduto', ['product' => $product], ['categories' => $categories]);
    }
    public function atualizarProduto(Request $request, $id){
        $product = Product::findOrFail($id);
        $product->update([
            'name'=> $request->name,
            'slug' => $request->slug,
            'description'=> $request->description,
            'category_id'=> $request->category_id,
            'price' => $request -> price,
        ]);
        return redirect('products/list');
    }

    public function excluirProduto($id){
        $product = Product::findOrFail($id);
        $product -> delete();

        return redirect('products/list');
        
    }
}
