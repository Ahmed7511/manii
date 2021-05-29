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
@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
    <div class="mb-3 ">
                    <form id="form"  method="POST"  enctype="multipart/form-data">
                    @csrf
                               <div class="mb-3">
                                       <label for="productName" class="form-label">Nom de produit</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="nom de produit">
                               </div>
                               <div class="mb-3">
                                         <label for="image" class="form-label"> image</label>
                                         <input type="file" class="form-control" name="image" id="image">
                               </div>
                               <div class="mb-3">
                                          <label for="price" class="form-label" >prix </label>
                                          <input type="number" class="form-control" name="price" id="price">
                               </div>
                               <div class="mb-3">
                                         <label for="description" class="form-label">description</label>
                                         <textarea class="form-control" name="description" id="description" rows="3"></textarea>
                               </div>
                                <div class="text-center">
                                     <input type="submit"  value="Ajouter">
                                </div>
                     </form>
             </div>
             
 <div class="row">
    
    @foreach($products as $product)
      <div class="card col-md-4" >
            <img src="{{asset('/productImages/'.$product->image)}}" width="200px" height="200px"
                      class="img-thumbnail" alt="image_produit">
             <div class="card-body">
                        <h5 class="card-title">{{$product->name}}</h5>
                              <p class="card-text">{{$product->description}}</p>
                         <ul class="list-group list-group-flush">
                                <li class="list-group-item">{{$product->price}},00 €</li>
                         </ul>
                   <div class="card-body">
                       <a type="button" href="update-product/{{$product->id}}" 
                       class="btn btn-sm btn-outline-secondary">modifier </a>

                       <a type="button" href="delete-product/{{$product->id}}"
                        class="btn btn-sm btn-outline-secondary">supprimer</a>
                    </div>
              </div>
        </div>
      @endforeach
    </div>




      </div>
      </div>  
        
          <!-- Copyright -->
          <div class="text-center mt-5 mb-0 p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2020 Copyright:
            <a class="text-dark" href="#">manii.com</a>
          </div>
          <!-- Copyright -->
      
        
          @endsection

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

        </body>

  </html>
