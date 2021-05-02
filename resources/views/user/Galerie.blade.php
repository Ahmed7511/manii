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
            <a class="navbar-brand" href="{{ url('/logout') }}"> déconexion </a>
          </div>
        </div>
        </nav>



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
            <a href="{{$product->id}}" class="card-link">supprimer ce produit</a>
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

<script type="text/javascript" src="/js/products.js"></script>
        </body>
  </html>