<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="http://localhost:8000/css/bootstrap.min.css">
  <title>Cadastrar novo produto</title>
</head>

<body>

  <div class="container"> <div class=" text-center mt-5 ">
    
        <h1>Criar novo Produto</h1>
    </div>
    <div class="row ">
        <div class="col-lg-7 mx-auto">
            <div class="card mt-2 mx-auto p-4 bg-light">
                <div class="card-body bg-light">
                    <div class="container">
                        <form form action="{{route('cadastrar_produto')}}" method="POST" id="contact-form" role="form">
                        @csrf
                            <div class="controls">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_name">Name</label> <input type="text" name="name" class="form-control"> </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_lastname">slug *</label> <input type="text" name="slug" class="form-control"> </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_email">price</label> <input id="form_email" type="text" name="price" class="form-control"> </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_need">Categoria</label>
                                         <select name="category_id" class="form-control" required="required">
                                         @foreach ($categories as $category)
                                          <option value="{{$category->id}}">{{$category->name}}</option>
                                          @endforeach
                                                              </select> </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                    <div class="form-group"> <label for="form_message">Descrição</label> <textarea name="description" class="form-control" rows="4" required="required"></textarea> </div>
                                    </div>
                                    <div class="col-md-12"> <input type="submit" class="btn btn-success btn-send pt-2 btn-block " value="Cadastrar novo produto"> </div>
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