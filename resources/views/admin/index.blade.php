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
<nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <div class="container-fluid">
          <a class="navbar-brand" href="./">Accueil</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="./prestations">Nos prestations </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link active"  href="./Actualité">Actualités / Revue de presse</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link active" href="./Galerie">Galerie</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link active" href="./contact">Nous Contactez</a>
              </li>
            </ul>
          </div>
          <a class="navbar-brand"  href="./Galerie" onclick="logout()" >déconexion</a>
        
        </div>
        </nav>
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
                               <div class="mb-3">
                                <input type="submit"  value="Ajouter">
                                </div>
                     </form>
             </div>
             
        <div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
      @foreach($products as $product)
         
      <div class="card col-md mx-3" >
  <img src="{{asset('/productImages/'.$product->image)}}" class="card-img-top" alt="produit">
  <div class="card-body">
    <h5 class="card-title">{{$product->name}}</h5>
    <p class="card-text">{{$product->description}}</p>
    
           <ul class="list-group list-group-flush">
              <li class="list-group-item">{{$product->price}},00 €</li>
            </ul>
            <div class="card-body">
            <a href="update-product/{{$product->id}}" class="card-link">modifier ce produit</a><br>
            <a href="delete-product/{{$product->id}}" class="card-link">supprimer ce produit</a>
            </div>
  </div>
</div>
      @endforeach
        </div>




        
        
          <!-- Copyright -->
          <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2020 Copyright:
            <a class="text-dark" href="#">manii.com</a>
          </div>
          <!-- Copyright -->
      
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

<!-- <script type="text/javascript" src="/js/admin.js"></script> -->

        </body>

  </html>
