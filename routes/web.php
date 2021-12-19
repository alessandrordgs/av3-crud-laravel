<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/helloworld', function() {
    $hw = "hello world";
 return view('helloworld', ['hw'=> $hw]);
});

Route::get('/primeira-rota', function(){
    return 'Esta mensagem aparecerá na tela';
});

Route::get('/categories', function(){
    $categories = \App\Models\Category::all();
    return $categories;
});
Route::get('/categories/list',
   [CategoryController::class, 'listar']
);

Route::get('/categories/create',
   [CategoryController::class, 'formCategoria']
);

Route::post('/categories/create',
   [CategoryController::class, 'criarCategoria']
)->name('cadastrar_categoria');


Route::get('categories/edit/{id}', 
    [CategoryController::class, 'editarCategoria']
);

Route::put('categories/edit/{id}', 
    [CategoryController::class, 'atualizarCategoria']
)->name('atualizar_categoria');

Route::get('categories/delete/{id}',  [CategoryController::class, 'excluirCategoria']);





Route::get('/products/list',
[ProductController::class, 'listar']
);

Route::get('/products/create',
   [ProductController::class, 'formProduto']
);
Route::post('/products/create',
   [ProductController::class, 'criarProduto']
)->name('cadastrar_produto');

Route::get('products/edit/{id}', 
    [ProductController::class, 'editarProduto']
);
Route::put('products/edit/{id}', 
    [ProductController::class, 'atualizarProduto']
)->name('atualizar_produto');

Route::get('products/delete/{id}',  [ProductController::class, 'excluirProduto']);