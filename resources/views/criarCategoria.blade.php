<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="http://localhost:8000/css/bootstrap.min.css">
  <title>Cadastrar novo categoria</title>
</head>

<body>

  <form action="{{route('cadastrar_categoria')}}" method="POST">
    @csrf
    <div class="container"> <div class=" text-center mt-5 ">
        <h1>Nova Categoria</h1>
    </div>
    <div class="row ">
        <div class="col-lg-7 mx-auto">
            <div class="card mt-2 mx-auto p-4 bg-light">
                <div class="card-body bg-light">
                    <div class="container">
                        <form id="contact-form" action="{{route('cadastrar_categoria')}}" method="POST" role="form">
                            <div class="controls">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_name">Name *</label> <input type="text" name="name" class="form-control"required="required"> </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_lastname">Slug</label> <input type="text" name="slug" class="form-control" required="required"> </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group"> <label for="form_message">Descrição</label> <textarea name="description" class="form-control" rows="4" required="required"></textarea> </div>
                                    </div>
                                    <div class="col-md-12"> <input type="submit" class="btn btn-success btn-send pt-2 btn-block " value="cadastrar nova categoria"> </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div> <!-- /.8 -->
        </div> <!-- /.row-->
    </div>
</div>
  </form>
</body>

</html>