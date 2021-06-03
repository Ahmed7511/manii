<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;


class productController extends Controller
{

    public function getAll()
        {
            $userId = Auth::user()->id ;
            $myCart =  Cart::where('user_id', $userId)->count();      
           $products = Product::all(); 
            
            if(empty($products))
             {
                 return response()->json($products, 204);
                
             }
               
           //return  response()->json($products, 200);
            return view('user.Galerie', compact('products', 'myCart'));
        }


   public function getOne($id)
      {
          $product = Product::find($id);
          $userId = Auth::user()->id ;
          $myCart =  Cart::where('user_id', $userId)->count();
          if($product === null)
          {
              return response()->json($product,404);
          }
            
           //  return response()->json($product, 200);
          return view('user.product', compact('product', 'myCart'));
        
      }

      
    
   
}
