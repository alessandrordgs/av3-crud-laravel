<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="http://localhost:8000/css/bootstrap.min.css">
  <title>Editar novo produto</title>
</head>

<body>

  <!-- <form action="{{ route('atualizar_produto',['id' => $product->id ]) }}" method="POST">
  {{ method_field('PUT') }}
    @csrf
    <label for="">name</label>
    <input name="name" value="{{$product->name}}" type="text">
    <label for="">slug</label>
    <input value="{{$product->slug}}" name="slug" type="text">
    <label for="">Descrição</label>
    <input value="{{$product->description}}" name="description" type="text">
    <label for="">Preço</label>
     <input value="{{$product-> price}}" name="price" type="text">
    <select name="category_id" id="">
      <option value="{{$product->category_id}}"></option>
      @foreach ($categories as $category)
      <option value="{{$category->id}}">{{$category->name}}</option>
      @endforeach
    </select>
    <button>Cadastrar</button>
  </form> -->

  <div class="container"> <div class=" text-center mt-5 ">
    
    <h1>Criar novo Produto</h1>
</div>
<div class="row ">
    <div class="col-lg-7 mx-auto">
        <div class="card mt-2 mx-auto p-4 bg-light">
            <div class="card-body bg-light">
                <div class="container">
                    <form  action="{{ route('atualizar_produto',['id' => $product->id ]) }}" method="POST" id="contact-form" role="form">
                    {{ method_field('PUT') }}
    @csrf
                        <div class="controls">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group"> <label for="form_name">Name</label> <input  value="{{$product->name}}"  type="text" name="name" class="form-control"> </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group"> <label for="form_lastname">slug </label> <input  value="{{$product->slug}} "type="text" name="slug" class="form-control"> </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group"> <label for="form_email">price</label> <input value="{{$product-> price}}" type="text" name="price" class="form-control"> </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group"> <label for="form_need">Categoria</label>
                                     <select name="category_id" class="form-control" required="required">
                                       <option value="{{$product->category_id}}"></option>
                                     @foreach ($categories as $category)
                                      <option value="{{$category->id}}">{{$category->name}}</option>
                                      @endforeach
                                                          </select> </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                <div class="form-group"> <label for="form_message">Descrição</label> <textarea name="description" class="form-control" rows="4" required="required">{{$product->description}}</textarea> </div>
                                </div>
                                <div class="col-md-12"> <input type="submit" class="btn btn-success btn-send pt-2 btn-block " value="Editar produto"> </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div> <!-- /.8 -->
    </div> <!-- /.row-->
</div>
</div>
</body>

</html>