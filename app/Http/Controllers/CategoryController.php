<?php

namespace App\Http\Controllers;

use \App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function listar()
    {
   $categories = Category::all();
    return view('Category-list', compact('categories'));
    }
   
    public function formCategoria()
    { 
        return view('CriarCategoria');
    }

    public function criarCategoria(Request $request)
    {
          Category::create([
            'name'=> $request->name,
            'slug' => $request->slug,
            'description'=> $request->description,
            'uuid' => Str::uuid(),
        ]);
            return redirect('categories/list');
        
    }


    public function editarCategoria($id){
        $category = Category::findOrFail($id);
        return view('editarCategoria', ['category' => $category]);
    }
    public function atualizarCategoria(Request $request, $id){
        $Category = Category::findOrFail($id);
        $Category->update([
            'name'=> $request->name,
            'slug' => $request->slug,
            'description'=> $request->description,
        ]);
        return redirect('categories/list');
    }

    public function excluirCategoria($id){
        $Category = Category::findOrFail($id);
        $Category -> delete();

        return redirect('categories/list');
        
    }
}
