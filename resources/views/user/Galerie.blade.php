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


@if(Auth()->user())
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Nos Produits') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
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
                                                       <a href="Galerie/product/{{$product->id}}" class="card-link">Voir détaille</a><br>
                                             </div>
                                            </div> 
                              </div>
                             @endforeach
                      </div>
              </div>
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
        @endif
        @endsection

        </body>
  </html>