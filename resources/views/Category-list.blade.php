<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Categorias</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://localhost:8000/css/bootstrap.min.css">
</head>

<body>
<header>
        <a href="{{url('products/list')}}">Produtos</a>
        <a href="{{url('categories/list')}}">Categorias</a>
    </header>
    <div class="page-container">
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body">
                   <div class="d-flex align-items-center">
                   <h4 class="header-title">categorias</h4>
                    <div>
                    <button class="border-0">
                            <a href="{{url('categories/create')}}">Adicionar nova Categoria</a>
                        </button>
                    </div>
                   </div>
                    <div class="single-table">
                        <div class="table-responsive">
                            <table class="table table-hover progress-table text-center">
                                <thead class="text-uppercase">
                                    <td>ID</td>
                                    <td>NOME</td>
                                    <td>Slug</td>
                                    <td>Descrição</td>
                                    <td>Ações</td>
                                </thead>
                                <tbody>
                                    @forelse($categories as $category)

                                    <tr>
                                        <td scope="row">{{$category->id}}</td>
                                        <td>{{$category->name}}</td>
                                        <td>{{$category->slug}}</td>
                                        <td>{{$category->description}}</td>
                                        <td>
                                            <ul class="d-flex justify-content-center">
                                            <button class="border-0">
                                                   <a href="{{url("categories/edit/$category->id")}}">Editar</a>
                                               </button>
                                               <button class="border-0">
                                               <a href="{{url("categories/delete/$category->id")}}">Excluir</a>
                                               </button>
                                            </ul>
                                        </td>
                                    </tr>

                                    @empty
                                    <tr>
                                        <td colspan=2>Nao encostramos registros</td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</body>

</html>