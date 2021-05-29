<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use DB;
class CartController extends Controller
{
    
        public function getAll()
        {
          $userId = Auth::user()->id ;
          //$myCart =  Cart::where('user_id', $userId)->count();
          
           $carts = DB::table('carts')->join('products', 'carts.product_id', '=', 'products.id' )
                                         ->where('carts.user_id', $userId)
                                         ->select('carts.quantity as qty', 'carts.id as cart_id', 'products.*' )
                                         ->get();  
                                 
                                        
            if(empty($carts))
             {
                  return view('user.panier')->with('succés', 'panier vide');
             }
              // dd($carts);
          // return  response()->json($cart, 200);
           return view('user.panier', compact('carts'));
        }

        public function add(Request $request)
        {
          $cartexsist = Cart::find($request->product_id);
          
          if($cartexsist == null ){
            $cart = Cart::create(array
            ('user_id' => Auth::user()->id,
            'product_id' => $request->product_id,
            'quantity' => $request->quantity )
                          );
            
            return redirect('/Galerie/panier');
          }elseif($cartexsist != null) {
            return redirect('/Galerie/panier')->with('erreur', 'produit déja ajouté !');
          }

           
        }

        public function delete(Request $request, $id)
        {
          Cart::destroy($id);
          return redirect('/Galerie/panier')->with('succés', 'produit supprimé !');
        }
        
      public function myCart()
      {
          $userId = Auth::user()->id ;
        $myCart =  Cart::where('user_id', $userId)->count();
          //return view('user.panier', compact('myCart'));
      }
    
     
}
