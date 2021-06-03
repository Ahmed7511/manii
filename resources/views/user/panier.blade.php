@extends('layouts.app')

@section('content')

<div class="container">
  <main>
  @if(count($carts) > 0)

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Produit</th>
      <th scope="col">prix</th>
      <th scope="col">Quantité</th>
      <th scope="col">Totale</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
    <tbody>
   @foreach( $carts as $cart)
    <tr>
      <th scope="row">*</th>
      <td>{{$cart->name}} </td>
      <td>{{$cart->price}}, 00 € </td>
       <td>{{$cart->qty}} </td>
        <td>{{$cart->price * $cart->qty}},00 € </td>
        <td><a type="button" href="delete-cart/{{$cart->cart_id}}"><i class="fa fa-trash"></i> </a></td>       
  </tr>
  @endforeach

    <tr>
        <td></td>
        <td></td>
        <td style="display: none">{{$total = 0}} </td>
       <th>Total à payer </th>
       @foreach($carts as $cart)
      
       <td style="display: none"> {{ $total += $cart->price * $cart->qty}} </td>
      @endforeach
      <td>{{$total}} </td>
    </tr>

  </tbody>
</table>   

  @else
  <div class="py-5 text-center">
    <p class="bg-secondary text-white" > votre panier est vide</p>
    <div>

  @endif
  


      <div class="py-5 text-center">
        <h4 class="mb-3">Addresse de livraison</h4>
        <form class="needs-validation" novalidate>
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">Nom</label>
              <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
              <div class="invalid-feedback">
                Votre nom
              </div>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">prénom</label>
              <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
              <div class="invalid-feedback">
                Votre prénom
              </div>
            </div>

            <div class="col-12">
              <label for="email" class="form-label">Email <span class="text-muted">(Optional)</span></label>
              <input type="email" class="form-control" id="email" placeholder="nom@example.com">
              <div class="invalid-feedback">
               votre adresse email de facturation
              </div>
            </div>

            <div class="col-12">
              <label for="address" class="form-label">Adresse</label>
              <input type="text" class="form-control" id="address" placeholder="12 rue de paris" required>
              <div class="invalid-feedback">
               votre adresse de livraison.
              </div>
            </div>

            <div class="col-12">
              <label for="address2" class="form-label">ville</label>
              <input type="text" class="form-control" id="state" placeholder="paris ">
            </div>

            <div class="col-md-5 mt-4">
              <label for="country" class="form-label">pays</label>
              <select class="form-select" id="country" required>
                <option value="">Choose...</option>
                <option>France</option>
                <option>Belgique</option>
                <option>Espagne</option>
                <option>Pays Bas</option>
                <option>Luxembourg</option>
              </select>
              <div class="invalid-feedback">
                Please select a valid country.
              </div>
            </div>

            <div class="col-md-3">
              <label for="zip" class="form-label">Adresse Postale</label>
              <input type="text" class="form-control" id="zip" placeholder="" required>
              <div class="invalid-feedback">
              Adresse Postal obligatoire.
              </div>
            </div>
          </div>

          <hr class="my-4">

          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="same-address">
            <label class="form-check-label" for="same-address">Shipping address is the same as my billing address</label>
          </div>

          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="save-info">
            <label class="form-check-label" for="save-info">Save this information for next time</label>
          </div>

          <hr class="my-4">

          <h4 class="mb-3">Payment</h4>

          <div class="my-3">
            <div class="form-check">
              <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked required>
              <label class="form-check-label" for="credit">Credit card</label>
            </div>
            <div class="form-check">
              <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required>
              <label class="form-check-label" for="debit">Debit card</label>
            </div>
            <div class="form-check">
              <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required>
              <label class="form-check-label" for="paypal">PayPal</label>
            </div>
          </div>

          <div class="row gy-3">
            <div class="col-md-6">
              <label for="cc-name" class="form-label">Name on card</label>
              <input type="text" class="form-control" id="cc-name" placeholder="" required>
              <small class="text-muted">Full name as displayed on card</small>
              <div class="invalid-feedback">
                Name on card is required
              </div>
            </div>

            <div class="col-md-6">
              <label for="cc-number" class="form-label">Credit card </label>
              <input type="text" class="form-control" id="cc-number" placeholder="" required>
              <div class="invalid-feedback">
                Credit card number is required
              </div>
            </div>

            <div class="col-md-3">
              <label for="cc-expiration" class="form-label">Expiration</label>
              <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
              <div class="invalid-feedback">
                Expiration date required
              </div>
            </div>

            <div class="col-md-3">
              <label for="cc-cvv" class="form-label">CVV</label>
              <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
              <div class="invalid-feedback">
                Security code required
              </div>
            </div>
          </div>

          <hr class="my-4">

          <button class="w-100 btn btn-primary btn-lg" type="submit">Confirmer la Commande</button>
        </form>
      </div>
    </div>
  </main>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2017–2021 Company Name</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacy</a></li>
      <li class="list-inline-item"><a href="#">Terms</a></li>
      <li class="list-inline-item"><a href="#">Support</a></li>
    </ul>
  </footer>
</div>


@endsection