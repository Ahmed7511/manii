<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galerie</title>
</head>
<body>
    

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 pb-6">
            <div class="card">
                <div class="card-header">notre produit</div>
            
                       

                          <form action="/edit-product/{{$product->id}}" method="POST" role="form" enctype="multipart/form-data">
                                        @csrf
                                        {{method_field('POST')}}
                                        <div class="form-group row">
                                            <img src="{{asset('/productImages/'.$product->image)}}" class="card-img-top" alt="produit">
                                            
                               
                                            <label for="image" class="col-md-4 col-form-label text-md-right">Image</label>
                                            <div class="input-groupe">
                                                <input type="file" id="image" type="file" class="form-control" name="image" value="{{$product->image}}" >
                                                
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>
                                            <div class="col-md-6">
                                                <input id="name" type="text" class="form-control" name="name" value="{{$product->name}}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="price" class="col-md-4 col-form-label text-md-right">Price</label>
                                            <div class="col-md-6">
                                                <input id="price" type="number" class="form-control" name="price" value="{{$product->price}}" >
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="description" class="col-md-4 col-form-label text-md-right">description</label>
                                            <div class="col-md-6">
                                                <input id="description" type="text" class="form-control" name="description" value="{{$product->description}}">
                                            </div>
                                        </div>
                                
                                        <div class="form-group row mb-4 mt-5">
                                            <div class="col-md-8 offset-md-6">
                                                <button type="submit" class="btn btn-primary">Update product</button>
                                            </div>
                                        </div>
                                    </form>
                 
            </div>
        </div>
    </div>




        
        
          <!-- Copyright -->
          <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2020 Copyright:
            <a class="text-dark" href="#">manii.com</a>
          </div>
          <!-- Copyright -->
      
        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
        </body>
  </html>