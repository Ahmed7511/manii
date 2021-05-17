@extends('layouts.app')

@section('content')
 
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Produit</th>
      <th scope="col">prix</th>
      <th scope="col">Quantité</th>
      <th scope="col">Totale</th>
    </tr>
  </thead>
  <tbody>
   @foreach( $products as $product)
    <tr>
      <th scope="row">*</th>
      <td>{{$product->name}} </td>
      <td>{{$product->price}}, 00 € </td>
    
       <td><input type="number" name="quantity" value="{{$product->qty}}" > </td>
    
        <td>{{$product->price * $product->qty}},00 € </td>
  </tr>
  @endforeach
    <tr>
        <td></td>
        <td></td>
        <td></td>
       <th>Totale à payer </th>
       <td> ,00 € </td>
    </tr>
  </tbody>
</table>                               
@endsection