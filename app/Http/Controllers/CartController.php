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
          $myCart =  Cart::where('user_id', $userId)->count();
          
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
           return view('user.panier', compact('carts','myCart'));
        }

        public function add(Request $request)
        {
          $isExist = Cart::where('product_id',$request->product_id)->exists();
          //dd($isExist);

          if($isExist){
            $cart = Cart::where('product_id',$request->product_id)->first();
            $cart->quantity += $request->quantity ;
            $cart->save();
            return redirect('/Galerie/panier');
           
          }else {
            $cart = Cart::create(array
            ('user_id' => Auth::user()->id,
            'product_id' => $request->product_id,
            'quantity' => $request->quantity )
                          );
            return redirect('/Galerie/panier');
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
      }
    
     
}
