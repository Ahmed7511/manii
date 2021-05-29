@extends('layouts.app')
@section('content')
<div class="col-md-6">
                     <div class="card col-md mx-3" >
                                     <img src="{{asset('/productImages/'.$product->image)}}" class="card-img-top" alt="produit">
                                          <div class="card-body">
                                               <h5 class="card-title">{{$product->name}}</h5>
                                                <p class="card-text">{{$product->description}}</p>
    
                                                      <ul class="list-group list-group-flush">
                                                           <li class="list-group-item">Prix : {{$product->price}},00 €</li>
                                                       </ul>
                                              
                                             <form action="{{route('user.panier')}}" method="POST">
                                             @csrf
                                             <label for="qty">Quantité</label>
                                             <input class="form-control" type="number" name="quantity" id="qty"  value="1">
                                             <input type="hidden" name="product_id" value="{{$product->id}}">
                                             
                                                       <button type="submit" class="btn btn-dark">
                                                       <i class="fas fa-cart-plus"></i>
                                                       Ajouter au panier</button>
                                             </form>
                                            </div> 
                              </div>
 </div>
@endsection