@extends('layouts.app')
@section('content')
<div class="col-md-6">
                  
                     <div class="card col-md mx-3" >
                                     <img src="{{asset('/productImages/'.$product->image)}}" class="card-img-top" alt="produit">
                                          <div class="card-body">
                                               <h5 class="card-title">{{$product->name}}</h5>
                                                <p class="card-text">{{$product->description}}</p>
    
                                                      <ul class="list-group list-group-flush">
                                                           <li class="list-group-item">{{$product->price}},00 €</li>
                                                       </ul>
                                             <div class="card-body">
                                                       <a href="/Galerie/product/{{$product->id}}" class="card-link">Ajouter au panier</a><br>
                                             </div>
                                            </div> 
                              </div>
 </div>
@endsection