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
           $products = DB::table('carts')->join('products', 'carts.product_id', '=', 'products.id' )
                                         ->where('carts.user_id', $userId)
                                         ->select('carts.quantity as qty', 'products.*' )
                                         ->get();  
                                                    
                                        
            if(empty($products))
             {
                 return response()->json($products, 204);
             }
               //dd($products);
          // return  response()->json($cart, 200);
           return view('user.panier', compact('products', 'myCart'));
        }

        public function add(Request $request)
        {
            $cart = Cart::create(array
            ('user_id' => Auth::user()->id,
            'product_id' => $request->product_id,
            'quantity' => $request->quantity )
                          );
            
            return view('user.Galerie');
        }
      public function myCart()
      {
          $userId = Auth::user()->id ;
        $myCart =  Cart::where('user_id', $userId)->count();
          //return view('user.panier', compact('myCart'));
      }
    // public function add(Request $request)
    // { 
    //     $userId = auth()->user()->id; // or any string represents user identifier
    //      Cart::session($userId)->add(array(
    //          // 'id' => 456, // inique row ID
    //           'product_id' => $request->product_id,
    //            'quantity' => $request->quantity,
    //             'attributes' => array()
    //            ));
    //     return redirect('/Galerie/panier');
    // }

    // public function index()
    // {
    //     $content =  Cart::getContent();
    //     $total = Cart::getTotal();
    //    // $remove = Cart::remove();
    //     //dd($content);
    //     return view('user.panier', compact('content', 'total'));

    // }
}
